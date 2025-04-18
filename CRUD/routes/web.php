<?php
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


#Route::get('/', function () {
#    return view('welcome');
#});


# ruta de tipo get 
# su pad es la raiz /
# controlador de Users
# el metodo que utiliza se llama index
# pasamos una condicion de ruta name es decir le damos nombre a la ruta

# ejemplo
Route::get('/', [Users::class, 'index']) ->name('index');
Route::get('/create', [Users::class, 'create']) ->name('create');
Route::post('/store', [Users::class, 'store']) ->name('store');

