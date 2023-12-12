<?php


use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ProductosController::class)->group(
    function(){
        Route::get('/', "index")->name('crud.index');
        Route::get('/createProducto', "createProducto")->name('crud.createProducto');
        Route::post('/storeProducto', "storeProducto")->name('crud.storeProducto');
        Route::put('/updateProducto/{id}', "updateProducto")->name('crud.updateProducto');
        Route::get('/editProducto/{id}', "editProducto")->name('crud.editProducto');
        Route::get('/showProducto/{id}', "showProducto")->name("crud.showProducto");
        Route::delete('/destroyProducto/{id}', "destroyProducto")->name("crud.destroyProducto");
    }
);

Route::controller(ProveedorController::class)->group(
    function(){
        Route::get('/proveedor', 'proveedor')->name('proveedores');
        Route::get('/proveedor/createProveedor', "createProveedor")->name('crud.createProveedor');
        Route::post('/proveedor/storeProveedor', "storeProveedor")->name('crud.storeProveedor');
        Route::put('/proveedor/updateProveedor/{id}', "updateProveedor")->name('crud.updateProveedor');
        Route::get('/proveedor/editProveedor/{id}', "editProveedor")->name('crud.editProveedor');
        Route::get('/proveedor/showProveedor/{id}', "showProveedor")->name("crud.showProveedor");
        Route::delete('/proveedor/destroyProveedor/{id}', "destroyProveedor")->name("crud.destroyProveedor");
    }
);
