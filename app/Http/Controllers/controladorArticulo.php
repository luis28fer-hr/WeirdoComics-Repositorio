<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadBuscar;
use App\Http\Requests\ValidarArticulo;
use App\Http\Requests\validarpedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\solicitarPedidoArticulo;
class controladorArticulo extends Controller
{

    public function create()
    {
        $consulProve=DB::table('tb_proveedores')->get();
        $consulMarca=DB::table('tb_marcas')->get();
        return view('parciales.inventario.articulo.agregar',compact('consulProve','consulMarca'));

    }


    public function store(ValidarArticulo $req)
    {
        $pre_compra = $req->input('txtpreciocom');
        $pre_venta = $pre_compra + ($pre_compra * 0.40);

        DB::table('tb_articulos')->insert([
            "nombre"=>$req->input('txtnombre'),
            "tipo"=>$req->input('txttipo'),
            "id_marca"=>$req->input('txtmarcas'),
            "descripcion"=>$req->input('txtdescripcion'),
            "cantidad"=>$req->input('txtcantidad'),
            "precioCompra"=>$req->input('txtpreciocom'),
            "precioVenta"=>$pre_venta,
            "fechaIngreso"=>$req->input('txtfech'),
            "id_proveedor"=>$req->input('txtproveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('inventario/articulo/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function show()
    {
        $consulArticulos=DB::table('tb_articulos')->orderByDesc('created_at')->get();

        foreach($consulArticulos as $articulo){
            if($articulo->id_proveedor != null){
            $articulo->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre', 'correo'])->where('idProveedor', $articulo->id_proveedor)->first();
            }else{
                $articulo->proveedores =(object)['nombre'=>'No existe' ];
            }
            if($articulo->id_proveedor != null){
                $articulo->marca = DB::table('tb_marcas')->select(['idMarca', 'nombre'])->where('idMarca', $articulo->id_marca)->first();
            }else{
                $articulo->marca =(object)['nombre'=>'No existe' ];
            }

        }
        return view('parciales.inventario.articulo.consultar',compact('consulArticulos'));
    }

    public function showNombre(validadBuscar $req)
    {
        $nombre = $req->input('txtnombre');
        $consulArticulos=DB::select('select * from tb_articulos where nombre like ?', ['%'.$nombre.'%']);

        foreach($consulArticulos as $articulo){
            if($articulo->id_proveedor != null){
            $articulo->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre', 'correo'])->where('idProveedor', $articulo->id_proveedor)->first();
            }else{
                $articulo->proveedores =(object)['nombre'=>'No existe' ];
            }
            if($articulo->id_proveedor != null){
                $articulo->marca = DB::table('tb_marcas')->select(['idMarca', 'nombre'])->where('idMarca', $articulo->id_marca)->first();
            }else{
                $articulo->marca =(object)['nombre'=>'No existe' ];
            }
        }
        return view('parciales.inventario.articulo.consultar',compact('consulArticulos'));
    }


    public function showPDF()
    {

        $consulArticulos=DB::table('tb_articulos')->orderByDesc('created_at')->get();

        foreach($consulArticulos as $articulo){
            if($articulo->id_proveedor != null){
            $articulo->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre'])->where('idProveedor', $articulo->id_proveedor)->first();
            }else{
                $articulo->proveedores =(object)['nombre'=>'No existe' ];
            }
            if($articulo->id_proveedor != null){
                $articulo->marca = DB::table('tb_marcas')->select(['idMarca', 'nombre'])->where('idMarca', $articulo->id_marca)->first();
            }else{
                $articulo->marca =(object)['nombre'=>'No existe' ];
            }

        }

        $pdf = PDF::loadView('parciales.inventario.articulo.pdf', compact('consulArticulos'));

        return $pdf->stream();
    }

    public function generarPedido(validarpedido $req,  $id){

        $cantidad = $req->input('cantidad');
        $usuario=DB::table('tb_usuarios')->first();
        $articulo=DB::table('tb_articulos')->where('idArticulo', $id)->first();
        $proveedorArticulo = DB::table('tb_proveedores')->where('idProveedor', $articulo->id_proveedor)->first();
        $marca =DB::table('tb_marcas')->where('idMarca', $articulo->id_marca)->first();

        $pdf = PDF::loadView('parciales.inventario.articulo.pdf-pedido', compact('articulo', 'proveedorArticulo', 'cantidad', 'usuario', 'marca'));


        Mail::to($proveedorArticulo->correo)->send(new solicitarPedidoArticulo($articulo, $proveedorArticulo ,$cantidad, $usuario, $marca));


        return redirect('inventario/articulo/consultar')
        ->with('pedidoenviado','Guardado')
        ->with('nombre',$req->nombre);
    }


    public function edit($id)
    {
        $consulArticulo=DB::table('tb_articulos')->where('idArticulo', $id)->first();

        $consulMarca=DB::table('tb_marcas')->get();
        $marcaArticulo=DB::table('tb_marcas')->where('idMarca', $consulArticulo->id_marca)->first();

        $consulProve=DB::table('tb_proveedores')->get();
        $proovedorArticulo=DB::table('tb_proveedores')->where('idProveedor', $consulArticulo->id_proveedor)->first();


        return view('parciales.inventario.articulo.editar',compact('consulArticulo','consulProve', 'proovedorArticulo','consulMarca', 'marcaArticulo'));
    }

    public function update(ValidarArticulo $req,$id)
    {
        $pre_compra = $req->input('txtpreciocom');
        $pre_venta = $pre_compra + ($pre_compra * 0.40);

        DB::table('tb_articulos')->where('idArticulo', $id)->update([
            "nombre"=>$req->input('txtnombre'),
            "tipo"=>$req->input('txttipo'),
            "id_marca"=>$req->input('txtmarcas'),
            "descripcion"=>$req->input('txtdescripcion'),
            "cantidad"=>$req->input('txtcantidad'),
            "precioCompra"=>$req->input('txtpreciocom'),
            "precioVenta"=>$pre_venta,
            "fechaIngreso"=>$req->input('txtfech'),
            "id_proveedor"=>$req->input('txtproveedor'),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('inventario/articulo/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function destroy($id)
    {
        DB::table('tb_articulos')->where('idArticulo', $id)->delete();

        return redirect('inventario/articulo/consultar')
        ->with('eliminacion','texto');
    }
}
