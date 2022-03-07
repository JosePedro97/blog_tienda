# blog_tienda
***
Es una aplicación para la administración y visualizacón de Post, cuenta con inicio de sesión para usuarios administradores, donde se puede tener el control sobre los post y categorías con funciones como crear, editar y borrar, al igual cuenta con un apartado para que los visitantes puedan ver los posts por categorías.

## Contenido
1. [Requisitos iniciales](#requisitos-iniciales)
2. [Instalacion](#instalacion)
3. [Usuario de Prueba](#usuario-de-prueba)
4. [Librerias Utilizadas](#librerias-utilizadas)
5. [Consideraciones Importantes](#consideraciones-importantes)
6. [Autor](#autor)

## Requisitos iniciales
***
Aquí se listan una serie de aplicaciones las cuales se deben de tener instaladas para ejecutar este proyecto de forma local.

1. Laravel - 8
2. Gestor de base de datos Mysql (Preferentemente phpMyAdmin de Xampp)

## Instalacion
***

1. Debemos clonar este repositorio a la siguiente dirección "C:\xampp\htdocs" la cual es la ruta que nos da Xampp por defecto al instalarlo, esto para que funcione nuestra base de datos.
2. Activamos los modulos de Xampp Apache y Mysql.
3. Creamos una base de datos con phpMyAdmin con el nombre de "blog_tienda" y con un cotejamiento "utf8mb4_unicode_ci".
4. Ahora abrimos nuestro CMD y nos ubicamos en la ruta de nuestro proyecto en este caso en "C:\xampp\htdocs\blog_tienda".
5. Ejecutamos los siguientes comandos de php artisan

### !!!IMPORTANTE!! 
***
Debemos esperar que cada comando termine su ejecución para ingresar el que sigue, sino esperas que termine la ejecución o cierras el CMD mientras se ejecuta algun comando puedes encontrar errores y el funcionamiento del proyecto se afectará.

 ***
 Creamos las tablas de la base de datos.
 > php artisan migrate 
 
 ***
 Insertamos algunos registros en la base de datos y el usuario administrador de prueba con el que vamos a accerder a la parte administrativa.
 > php artisan db:seed 
 
 ***
 Activamos el servidor para visualizar el proyecto en nuestro navegador de preferencia.
 >php artisan serve

6. Copiamos la dirección ip junto con el puerto que nos da el comando "php artisan serve", por defecto entrega la siguiente "http://127.0.0.1:8000/" y la pegamos en la barra de navegación de nuestro navegador de preferencia.

## Usuario de Prueba

***
El usuario de prueba para acceder al apartado administrativo es el siguiente:
>Correo: jhondoe@mail.com
***
>Contraseña: mypassword

***
Nota: Al acceder a la aplicación el acceso al apartado administrativo se encuentra en el footer, el ultimo icono con forma de usuario.

## Librerias Utilizadas
***
1. Bootstrap 5 (https://getbootstrap.com/)
2. FontAwesome (https://fontawesome.com/)
3. SweetAlert2 (https://sweetalert2.github.io/)

## Consideraciones Importantes
***
1. Es importante que la aplicación sea ejecutada con conexión a internet ya que las librerías no estan descargas, si no solo son llamadas via CDN, si quieres ejecutar el proyecto de forma offline o sin conexión a internet se te recomienda descargar cada una de las librerías utilizadas, estas se encuentran en el Layaout el cual está en la siguiente dirección dentro del proyecto.
> C:\xampp\htdocs\blog_tienda\resources\views\layouts
***
El archivo es "layaout.blade.php" aquí encontraras las librerías utilizadas en este proyecto.

## Autor
***
José Pedro Márquez Solís
