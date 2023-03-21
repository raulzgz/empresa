<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto empresas

Creo el nuevo proyecto con laravel

```shell
laravel new Empresas
```

## Requisitos:

### R1 Instalar autenticacion
Dentro del directorio creado de Empresas ejecutamos estas isntrucciones:

1. npm install
2. git init
3.    
```shell
    composer require laravel/breeze
    php artisan breeze:install
    npm install
    npm run dev
```
4. Creamos el fichero [docker-composer.yaml](./docker-compose.yaml)
```shell
    docker compose up -d
```
5. Configuro el fichero [.ENV](./.env) para configurar la base de datos 
```shell
    B_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=empresa
    DB_USERNAME=manuel
    DB_PASSWORD=manuel
```
6. Ejecuto las migraciones
```shell
    php artisan migrate 
```
7. Arranco las herramientas de cliente
```shell
    npm run dev
```
8. puedo probar que esta todo bien instalado y pruebo a loguearme
9. abro el servidor y me conecto a la aplicacion
```shell
    php artisan serve &
```
