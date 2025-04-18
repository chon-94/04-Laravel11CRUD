# 04-Laravel11CRUD
 presentacion de un CRUD de laravel simple

## mysql
 
 es recomendable hacer lo siguiente  si vamos a utilizar mysql

     sudo mysql_secure_installation 

 ese comando nos permitira ingresar a la configuracion de mysql 
 podremos crear usuario contraseña existe otra amneara de hacerlo
 seria la siguiente
    
     sudo mysql -u root -p

     CREATE USER 'root'@'localhost' IDENTIFIED BY '123456';
     
     CREATE DATABASE dbcrud;

     GRANT ALL PRIVILEGES ON dbcrud.* TO 'root'@'localhost';
     
     FLUSH PRIVILEGES;

#

## Laravel 11

 Ahora podemos instalar laravel 11

     composer create-project --prefer-dist laravel/laravel proyecto-0 "11.*"     

 Luego en el editor de codigo corremos las migraciones

     php artisan migrate

 puede que tengamos error... yo estoy en arch me imagino que para algunos linuxeros tambien les afectara el error que se presenta al migrar este se soluciona asi

     sudo nano /etc/php/php.ini

     extension=bz2
     extension=mysqli
     extension=pdo_mysql

     sudo systemctl restart httpd

 para limpiar caches 

     php artisan config:clear
     php artisan cache:clear

 como consejo podriamos usar el DBeaver community ya que estamos usando maria db si  no puedes usar el workbanche yo usare ese porque en realidad estoy usando maria db

#

## Layouts con bootstrap

bueno debemos de crear  los siguientes archivos 
**CRUD/resources/views/layouts/main.blade.php** y **CRUD/resources/views/modules/user/index.blade.php** 
en el main es donde declaramos y el index es donde configurmos y utilizamos

**CRUD/resources/views/layouts/main.blade.php**

     <!doctype html>
     <html lang="en">
     <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <title>CRUD LARAVEL 11</title>
     </head>

     <body>

         @yield('contenido')
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>

     </html>

**CRUD/resources/views/modules/user/index.blade.php**

     @extends('layouts/main')

     @section('contenido')
     <div class="container mt-4">
          <h2>crud contenido contenerdor </h2> 
          <div class="row">
               <div class="col">

                    <div class="card">
                         <div class="card-body">
                              <a href="{{route('create')}}" class="btn btn-primary">Agregar</a>
                         </div>
                    </div>
                    
               </div>
     @endsection

**CRUD/resources/views/modules/user/create.blade.php**

 @extends('layouts/main')

     <div class="container mt-4">
          <div class="row">
               <div class="col">

                    <div class="card">
                         <div class="card-body">
                              <form action="{{ route('store') }}" method="POST"> 
                                   @csrf
                                   @method('POST')
                                   <label for="name">Escribe el nombre</label>
                                   <input type="text" name="name" id="name" class="form-control" required>
                                   <button class="btn btn-primary mt-3">AGREGAR</button>
                                   <a href="{{ route('index') }}" class="btn btn-secondary mt-3"> cancelar</a>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </div>

#

## Controlador de usuario

 Ahora debemos de crear controles y modelos para los usuarios eso se crea con el sgt comando en la terminal

     php artisan make:controller User -r

 Esto nos creara un controlador en **CRUD/app/Http/Controllers/Users.php** en el cual ya tendremos listo para programar
 y el modelo de usuarios ya viene en laravel **CRUD/app/Models/User.php**   
   

      <?php
      namespace App\Http\Controllers;
      use Illuminate\Http\Request;
      use App\Models\User;
      class Users extends Controller
      {
    
           public function index()
           {
                return view('modules/users/index');
           }

           public function create()
           {
                return view('modules/users/create');
           }

           public function store(Request $request)
           {
                $item = new User(); 
                $item->name = $request -> name;
                $item->save();
                return to_route('index');
           }

           public function show(string $id)
           {
                //
           }

           public function edit(string $id)
           {
                //
           }

           public function update(Request $request, string $id)
           {
                //
           }

           public function destroy(string $id)
           {
                //
           }
      }

#

## 