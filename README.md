
# Practica 3

Este proyecto consiste en la creación de una API utilizando Laravel y consumiendola con Ionic, utilizando Laravel para el backend y Ionic para el frontend. Es una aplicación Móvil que consume una API.

## Requisitos Previos

 - Instala [Composer](https://getcomposer.org/download/).
 - Instala [PHP](https://www.php.net/manual/es/install.php).
 - Instala [Node.js](https://nodejs.org/en).
 - Instala [Angular CLI](https://angular.io/guide/setup-local).
 - Instala [Ionic CLI](https://ionicframework.com/docs/intro/cli).
 - Instala [XAMPP](https://www.apachefriends.org/es/download.html).
 - Instala [Postman](https://www.postman.com/downloads/).

## Frameworks y lenguajes utilizados

- Backend: Laravel 10.10
- Frontend: Angular 16.2.8/Ionic 7.1.5
- Base de datos: XAMPP


## Configuración de la base de datos (XAMPP)

1. Inicia XAMPP y asegúrate de que Apache y MySQL estén en ejecución.

2. Abre phpMyAdmin [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

3. Crea una nueva base de datos y configura la información en el archivo `.env` del backend.



## Configuración del Backend (Laravel)

1. Clona el repositorio: `git clone https://github.com/xfunktastic/practica03.git`.

2. Abre el proyecto en tu editor de código.

3. Navega al directorio del backend: `cd backend`.
    
4. Instala las dependencias de Composer: `composer install`.
    
5. Copia el archivo de configuración: `cp .env.example .env`.
    
6. Genera la clave de la aplicación: `php artisan key:generate`.
    
7. Configura la base de datos en el archivo con tus datos `.env`.
    
8. Ejecuta las migraciones y los seeders: 
- `php artisan migrate`.
- `php artisan db:seed --class=DefaultUserSeeder`.
- `php artisan db:seed --class=DefaultFrameworksSeeder`.
- `php artisan db:seed --class=DefaultHobbiesSeeder`.
    
9. Inicia el servidor: `php artisan serve`.

- El backend será ejecutado en [http://localhost:8000/api/profile](http://localhost:8000/api/profile).

## Configuración del Frontend (Angular)

1. Navega al directorio del frontend: `cd frontend`.

2. Instalar Ionic: `npm install -g @ionic/cli`.

3. Instala las dependencias de Node: `npm install`.

4. Inicia la aplicación Ionic: `ng serve -o`.

El frontend estará disponible en [http://localhost:4200/](http://localhost:4200/).

## Consideraciones

- No pude hacer routing hacia el edit-user entonces hay que acceder manualmente con [http://localhost:4200/edit-user](http://localhost:4200/edit-user).

## Autor

- [@funktastic](https://www.github.com/xfunktastic)


