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

     GRANT ALL PRIVILEGES ON nombre_de_tu_base_de_datos.* TO 'nombre_usuario'@'localhost';
     
     FLUSH PRIVILEGES;


 Luego en el editor de codigo corremos las migraciones

     php artisan migrate

 puede que tengamos error... yo estoy en arch me imagino que para algunos linuxeros tambien les afectara el error que se presenta al migrar este se soluciona asi

     sudo nano /etc/php/php.ini

     extension=mysqli
     extension=pdo_mysql

     sudo systemctl restart httpd
