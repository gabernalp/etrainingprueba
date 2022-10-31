<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Prueba Etraining

Aplicacion para CRUD de Cursos utilizando Api para Backend y FrontEnd y como componente de presentacion VueJS

Utilice un hostname de pruebas como pruebaetraining.test y desde su servidor virtual apuntelo a la carpeta **/proyecto/public/**


## Instalación y Uso

Opción 1 - Clonar el repositorio con **git clone**
Opción 2 - Descargue el archivo .zip y yxtraiga el archivo y colóquelo en la carpeta que desee

## Despliegue

Ejecute **cp .env.example .env** el archivo para copiar el archivo de ejemplo. .env
Luego, edite su archivo **.env** con las credenciales de la base de datos y otras configuraciones.
Ejecutar el comando **composer install**
Ejecutar el comando **php artisan migrate --seed**
**Aviso:** la semilla es importante, porque creará el primer usuario administrador
Ejecutar el comando **php artisan key:generate**
Correr **npm install**
Correr **npm run dev**

**Laravel Sanctum para API Auth:** si está utilizando un nombre de host personalizado para un proyecto que no sea localhost, asegúrese de que el valor de la variable  SANCTUM_STATEFUL_DOMAINS en el archivo .env sea el mismo que su nombre de host en el navegador. Ejemplo:SANCTUM_STATEFUL_DOMAINS=miproyecto.test
Y listo, vaya a su dominio e inicia sesión:

## Credenciales predeterminadas

Nombre de usuario: admin@etraining.com
Contraseña: ETraining2022$

## Licencia

The Laravel framework es un framework de código abierto
