<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarComic;
use App\Http\Requests\validadBuscar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class controladorComic extends Controller
{

    public function index()
    {
        return view('inventario');
    }

    public function create()
    {
        $consulProve=DB::table('tb_proveedores')->get();
        return view('parciales.inventario.comic.agregar',compact('consulProve'));
    }

    public function store(procesarComic $req)
    {
        $pre_compra = $req->input('compra');
        $pre_venta = $pre_compra + ($pre_compra * 0.40);

        DB::table('tb_comics')->insert([
            "nombre"=>$req->input('nombre'),
            "añoEdicion"=>$req->input('edicion'),
            "compania"=>$req->input('compañia'),
            "cantidad"=>$req->input('cantidad'),
            "precioCompra"=>$req->input('compra'),
            "precioVenta"=>$pre_venta,
            "fechaIngreso"=>$req->input('fecha'),
            "id_proveedor"=>$req->input('proveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('inventario/comic/agregar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function show()
    {
        $consulComics=DB::table('tb_comics')->get();
        foreach($consulComics as $comic){
            if($comic->id_proveedor != null){
            $comic->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre'])->where('idProveedor', $comic->id_proveedor)->first();
        }else{
            $comic->proveedores =(object)['nombre'=>'No existe' ];
        }
        }
        return view('parciales.inventario.comic.consultar',compact('consulComics'));
    }

    public function showNombre(validadBuscar $req)
    {
        $nombre = $req->input('txtnombre');
        $consulComics=DB::select('select * from tb_comics where nombre like ?', ['%'.$nombre.'%']);

        foreach($consulComics as $comic){
            if($comic->id_proveedor != null){
            $comic->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre'])->where('idProveedor', $comic->id_proveedor)->first();
        }else{
            $comic->proveedores =(object)['nombre'=>'No existe' ];
        }
        }
        return view('parciales.inventario.comic.consultar',compact('consulComics'));
    }

    public function showPDF()
    {

        $consulComics=DB::table('tb_comics')->get();
        foreach($consulComics as $comic){
            if($comic->id_proveedor != null){
            $comic->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre'])->where('idProveedor', $comic->id_proveedor)->first();
        }else{
            $comic->proveedores =(object)['nombre'=>'No existe' ];
        }
        }

        $pdf = PDF::loadView('parciales.inventario.comic.pdf', compact('consulComics'));

        return $pdf->stream();
    }



    public function edit($id)
    {
        $consulComic=DB::table('tb_comics')->where('idComic', $id)->first();
        $consulProve=DB::table('tb_proveedores')->get();
        $proveedorComic=DB::table('tb_proveedores')->where('idProveedor', $consulComic->id_proveedor)->first();

        return view('parciales.inventario.comic.editar',compact('consulComic', 'consulProve', 'proveedorComic'));
    }

    public function update(procesarComic $req, $id)
    {
        $pre_compra = $req->input('compra');
        $pre_venta = $pre_compra + ($pre_compra * 0.40);

        DB::table('tb_comics')->where('idComic', $id)->update([
            "nombre"=>$req->input('nombre'),
            "añoEdicion"=>$req->input('edicion'),
            "compania"=>$req->input('compañia'),
            "cantidad"=>$req->input('cantidad'),
            "precioCompra"=>$req->input('compra'),
            "precioVenta"=>$pre_venta,
            "fechaIngreso"=>$req->input('fecha'),
            "id_proveedor"=>$req->input('proveedor'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('inventario/comic/consultar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function destroy($id)
    {
        DB::table('tb_comics')->where('idComic', $id)->delete();

        return redirect('inventario/comic/consultar')
        ->with('eliminacion','mensaje');

    }
}
