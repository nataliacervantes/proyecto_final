
#Pre-requisitos

Es necesario tener previamente instalado lo siguiente:
 * Un editor de código, para este desarrollo se utilizó la última versión de Visual Studio Code https://code.visualstudio.com/
 * Un programa que levante un servidor Apache, para este desarrollo se utilizó XAMPP que además permite manejar bases de datos con PHP my admin https://www.apachefriends.org/es/index.html
 * Php 7.2.29
 * Laravel 7.* la documentación de cómo hacerlo la encuentras en https://laravel.com/docs/7.x#installing-laravel
 
 #Instalación
 
 1) Abrimos nuestro VSC y colocamos en la terminal la siguiente ruta git clone https://github.com/erikaMirella91/proyecto_final.git
 2) Una vez que hayamos descargado el proyecto, lo abrimos dentro de la misma aplicación. 
 3) En seguida, corremos el comando: composer update
 4) Mientras se actualiza el proyecto, iniciamos nuestra aplicación XAMPP y corremos el servicio de apache y MySql.
 5) Abrimos el navegador de preferencia e ingresamos a la ruta https://localhost/phpmyadmin/
 6) Una vez que ingresamos generamos una base de datos llamada "maestros"
 7) Volvemos a nuestro VSC y ejecutamos php artisan migrate para generar las tablas que tiene nuestro proyecto.
 8) Terminadas las migraciones ejecutamos php artisan serve 
 9) Ahora volvemos a nuestro navegador y colocamos 127.0.0.1:8000/ que es la ruta por default que nos levanta el servidor.
 10) Y listo!
 
