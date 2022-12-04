<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarArticulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        DB::table('tb_articulos')->insert([
            "nombre"=>$req->input('txtnombre'),
            "tipo"=>$req->input('txttipo'),
            "id_marca"=>$req->input('txtmarcas'),
            "descripcion"=>$req->input('txtdescripcion'),
            "cantidad"=>$req->input('txtcantidad'),
            "precioCompra"=>$req->input('txtpreciocom'),
            "precioVenta"=>$req->input('txtprecioven'),
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
        $consulArticulos=DB::table('tb_articulos')->get();
        foreach($consulArticulos as $articulo){
            if($articulo->id_proveedor != null){
            $articulo->proveedores = DB::table('tb_proveedores')->select(['idProveedor', 'nombre'])->where('idProveedor', $articulo->id_proveedor)->first();
        }else{
            $articulo->proveedores =(object)['nombre'=>'No existe' ];
        }
        }
        return view('parciales.inventario.articulo.consultar',compact('consulArticulos'));
    }

    public function edit($id)
    {
        $consulArticulo=DB::table('tb_articulos')->where('idArticulo', $id)->first();
        $consulProve=DB::table('tb_proveedores')->get();
        $consulMarca=DB::table('tb_marcas')->get();
        return view('parciales.inventario.articulo.editar',compact('consulArticulo','consulProve','consulMarca'));
    }

    public function update(ValidarArticulo $req,$id)
    {
        DB::table('tb_articulos')->where('idArticulo', $id)->update([
            "nombre"=>$req->input('txtnombre'),
            "tipo"=>$req->input('txttipo'),
            "id_marca"=>$req->input('txtmarcas'),
            "descripcion"=>$req->input('txtdescripcion'),
            "cantidad"=>$req->input('txtcantidad'),
            "precioCompra"=>$req->input('txtpreciocom'),
            "precioVenta"=>$req->input('txtprecioven'),
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
        //
    }
}
