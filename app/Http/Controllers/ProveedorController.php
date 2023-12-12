<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function proveedor()
    {
        $datos = proveedor::all();
        return view ('proveedor', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProveedor()
    {
        return view ('agregarProveedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProveedor(Request $request)
    {
        $proveedores = new Proveedor();
        $proveedores->proveedor = $request->post('proveedor');
        $proveedores->save();
        return redirect()->route('proveedores')->with("success", "Proveedor ingresado con exito");
    }

    /**
     * Display the specified resource.
     */
    public function showProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view ('eliminarProveedor', compact('proveedor'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProveedor(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        return view ('actualizarProveedor', compact('proveedor')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProveedor(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->proveedor = $request->post('proveedor');
        $proveedor->save();

        return redirect()->route('proveedores')->with("success", "Actualizado con exito");
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('proveedores')->with("success", "Eliminado con exito");
    }
}
