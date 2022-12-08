<?php

namespace App\Http\Controllers;

use App\Http\Requests\buscarVenta;
use App\Http\Requests\editarventa;
use App\Http\Requests\validarVentaDatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use function PHPUnit\Framework\isNull;

class controladorVentas extends Controller
{
    public $comics_articulo;

    public function index()
    {

        return view('ventas');
    }

    public function add(validarVentaDatos $req)
    {

        $this->comics_articulo = $req->input('inventario');


        if ( $this->comics_articulo==1) {
            $idComic = $req->input('cod_pro');

            $comic = DB::table('tb_comics')->where('idComic', $idComic)->where('cantidad', '>', 0)->first();

            if (is_null($comic)) {

                return redirect('ventas/agregar')->with('no_existe', 'mensaje');

            }else{

                return view('parciales.ventas.modulo_ventas_comic', compact('comic'));
            }

        }

        if ($this->comics_articulo==2) {
            $idArticulo = $req->input('cod_pro');

            $articulo = DB::table('tb_articulos')->where('idArticulo', $idArticulo)->where('cantidad', '>', 0)->first();

            if (is_null($articulo)) {

                return redirect('ventas/agregar')->with('no_existe', 'mensaje');
            }else{

                return view('parciales.ventas.modulo_ventas_articulo', compact('articulo'));
            }

        }

    }

    public function create()
    {
        return view('parciales.ventas.agregar');
    }

    public function storeComic($id)
    {
        $consulUsuarios=DB::table('tb_usuarios')->first();
        $consulComic=DB::table('tb_comics')->where('idComic', $id)->first();

        DB::table('tb_ventas')->insert([
            "usuario_id"=>$consulUsuarios->idUsuario,
            "comic_id"=>$consulComic->idComic,
            "precio"=>$consulComic->precioVenta,
            "cantidad"=>1,
            "total"=>($consulComic->precioVenta * 1),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        DB::table('tb_comics')->where('idComic', $id)->update([
            "cantidad"=>($consulComic->cantidad - 1),
        ]);

        return redirect('ventas/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtNombre', $consulComic->nombre);
    }


    public function storeArticulo($id)
    {
        $consulUsuarios=DB::table('tb_usuarios')->first();
        $consulArticulo=DB::table('tb_articulos')->where('idArticulo', $id)->first();

        DB::table('tb_ventas')->insert([
            "usuario_id"=>$consulUsuarios->idUsuario,
            "articulo_id"=>$consulArticulo->idArticulo,
            "precio"=>$consulArticulo->precioVenta,
            "cantidad"=>1,
            "total"=>($consulArticulo->precioVenta * 1),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        DB::table('tb_articulos')->where('idArticulo', $id)->update([
            "cantidad"=>($consulArticulo->cantidad - 1),
        ]);

        return redirect('ventas/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtNombre', $consulArticulo->nombre);
    }


    public function show()
    {
        $consultaVentas=DB::table('tb_ventas')->orderByDesc('created_at')->get();

        foreach ($consultaVentas as $venta) {

            $venta->usuario=DB::table('tb_usuarios')->where('idUsuario', $venta->usuario_id)->first();
            $venta->comic=DB::table('tb_comics')->where('idComic', $venta->comic_id)->first();
            $venta->articulo=DB::table('tb_articulos')->where('idArticulo', $venta->articulo_id)->first();
        }


        return view('parciales.ventas.consultar', compact('consultaVentas'));
    }


    public function edit($id)
    {
        $consultaVenta=DB::table('tb_ventas')->where('idVenta', $id)->first();
        $usuario=DB::table('tb_usuarios')->where('idUsuario', $consultaVenta->usuario_id)->first();

        $articulo=DB::table('tb_articulos')->where('idArticulo', $consultaVenta->articulo_id)->first();
        $comic=DB::table('tb_comics')->where('idComic', $consultaVenta->comic_id)->first();

        $consultaComics=DB::table('tb_comics')->get();
        $consultaArticulos=DB::table('tb_articulos')->get();

        return view('parciales.ventas.editar', compact('consultaVenta', 'usuario', 'articulo', 'comic', 'consultaComics', 'consultaArticulos'));
    }


    public function updateComic(editarventa $req, $id)
    {

        $consulComic=DB::table('tb_comics')->where('idComic', $req->input('producto'))->first();
        $total = $consulComic->precioVenta * $req->input('cantidad');
        $cantidadDisponible = $consulComic->cantidad -  $req->input('cantidad');

        if ($cantidadDisponible<0) {

            return redirect('ventas/consultar')
            ->with('noprocede','error')
            ->with('txtCodProducto',$consulComic->nombre);
        }
        else{

            DB::table('tb_ventas')->where('idVenta', $id)->update([
                "comic_id"=>$req->input('producto'),
                "precio"=>$consulComic->precioVenta,
                "cantidad"=>$req->input('cantidad'),
                "total"=>$total,
                "updated_at"=>Carbon::now()
            ]);

            DB::table('tb_comics')->where('idComic', $req->input('producto'))->update([
                "cantidad"=>$cantidadDisponible,
            ]);


            return redirect('ventas/consultar')
            ->with('actualizacion','Guardado')
            ->with('txtCodProducto',$consulComic->nombre);
        }
    }


    public function updateArticulo(editarventa $req, $id)
    {

        $consulArticulo=DB::table('tb_articulos')->where('idArticulo', $req->input('producto'))->first();
        $total = $consulArticulo->precioVenta * $req->input('cantidad');
        $cantidadDisponible = $consulArticulo->cantidad -  $req->input('cantidad');

        if ($cantidadDisponible<0) {

            return redirect('ventas/consultar')
            ->with('noprocede','error')
            ->with('txtCodProducto',$consulArticulo->nombre);
        }
        else{

            DB::table('tb_ventas')->where('idVenta', $id)->update([
                "articulo_id"=>$req->input('producto'),
                "precio"=>$consulArticulo->precioVenta,
                "cantidad"=>$req->input('cantidad'),
                "total"=>$total,
                "updated_at"=>Carbon::now()
            ]);

            DB::table('tb_articulos')->where('idArticulo', $req->input('producto'))->update([
                "cantidad"=>$cantidadDisponible,
            ]);


            return redirect('ventas/consultar')
            ->with('actualizacion','Guardado')
            ->with('txtCodProducto',$consulArticulo->nombre);
        }
    }


    public function showNombre(buscarVenta $req)
    {

        $cod = $req->input('txtbuscar');
        $consultaVentas=DB::select('select * from tb_ventas where comic_id like ? or articulo_id like ?', ['%'.$cod.'%', '%'.$cod.'%']);


        foreach ($consultaVentas as $venta) {

            $venta->usuario=DB::table('tb_usuarios')->where('idUsuario', $venta->usuario_id)->first();
            $venta->comic=DB::table('tb_comics')->where('idComic', $venta->comic_id)->first();
            $venta->articulo=DB::table('tb_articulos')->where('idArticulo', $venta->articulo_id)->first();
        }

        return view('parciales.ventas.consultar',compact('consultaVentas'));
    }


    public function showPDF()
    {

        $consultaVentas=DB::table('tb_ventas')->orderByDesc('created_at')->get();

        foreach($consultaVentas as $venta){
            if($venta->usuario_id != null){
            $venta->usuario = DB::table('tb_usuarios')->select(['nombre', 'apellidoP', 'apellidoM'])->where('idUsuario', $venta->usuario_id)->first();
            }else{
                $venta->usuario =(object)['nombre'=>'No vendido' ];
            }
            if($venta->comic_id != null){
                $venta->comic = DB::table('tb_comics')->select(['idComic', 'nombre'])->where('idComic', $venta->comic_id)->first();
            }else{
                $venta->comic =(object)['nombre'=>'No vendido' ];
            }
            if($venta->articulo_id != null){
                $venta->articulo = DB::table('tb_articulos')->select(['idArticulo', 'nombre'])->where('idArticulo', $venta->articulo_id)->first();
            }else{
                $venta->articulo =(object)['nombre'=>'No vendido' ];
            }

        }
        $pdf = PDF::loadView('parciales.ventas.pdf', compact('consultaVentas'));

        return $pdf->stream();
    }

    public function destroy($id)
    {
        DB::table('tb_ventas')->where('idVenta', $id)->delete();
        return redirect('ventas/consultar')
        ->with('eliminacion','mensaje');
    }
}
