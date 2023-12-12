<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Proveedor;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Productos::all();
        return view ('index' ,compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProducto()
    {
        $proveedor = Proveedor::all();
        return view ('agregarProducto', compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProducto(Request $request)
    {
        $productos = new Productos();
        $productos->nombre = $request->post('nombre');
        $productos->precio = $request->post('precio');
        $productos->proveedor = $request->post('proveedor');
        $productos->save();

        return redirect()->route('crud.index')->with("success", "Producto agregado con exito");
    }

    /**
     * Display the specified resource.
     */
    public function showProducto($id)
    {
        $producto = Productos::find($id);
        
        return view ('eliminarProducto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProducto($id)
    {
        $producto = Productos::find($id);
        $proveedor = Proveedor::all();
        return view ('actualizarProducto', compact('producto', 'proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProducto(Request $request, $id)
    {
        $productos = Productos::find($id);
        $productos->nombre = $request->post('nombre');
        $productos->precio = $request->post('precio');
        $productos->proveedor = $request->post('proveedor');
        $productos->save();

        return redirect()->route('crud.index')->with("success", "Producto actualizado con exito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyProducto($id)
    {
        $producto = Productos::find($id);
        $producto->delete();

        return redirect()->route('crud.index')->with("success", "Producto Eliminado");
    }
}
