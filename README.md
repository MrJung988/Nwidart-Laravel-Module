<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

<hr><hr>

## Steps to create QR code

**Step 1:** Install package using following command

```
composer require simplesoftwareio/simple-qrcode
```

**Step 2:** Add service provider in config/app.php

```
SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,
```

**Step 3:** Add alias in config/app.php

```
'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class,
```

**Step 4:** Use following code on view file

```
{{ QrCode::size(255)->generate('Your message') }}
```

## Steps for integrate spatie roles and permission

**Step 1:** Install package using composer

```
composer require spatie/laravel-permission
```

**Step 2:** Add service provider in config/app.php

```
Spatie\Permission\PermissionServiceProvider::class,
```

**Step 3:** Publish config file and migration

```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

0R

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
```

**Step 4:** Run migration

```
php artisan migrate
```

**Step 5:** Add trait in User model

```
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasRoles;
}
```

**Step 6:** Add middleware in app/Http/Kernel.php

```
protected $routeMiddleware = [
    ...
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
    'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
    'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
];
```

## Steps to use laravel-collective/html

**Step 1:** Install package using composer

```
composer require laravelcollective/html
```

**Step 2:** Add service provider in config/app.php

```
Collective\Html\HtmlServiceProvider::class,
```

**Step 3:** Add alias in config/app.php

```
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
```

**Step 4:** Use following code on view file

```
{!! Form::open(['url' => 'foo/bar']) !!}
    //
{!! Form::close() !!}
```

## Steps to use laravel-ui

**Step 1:**Install package using composer:

```
composer require laravel/ui
```

**Step 2:** Run the command below:

````
// Generate basic scaffolding...
php artisan ui bootstrap
php artisan ui vue
php artisan ui react


OR
// Generate login / registration scaffolding...
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth```
````

**Step 3:** Run the command below:

```
npm install && npm run dev

```

**Step 4:** Run the command below to install additional dependencies:

```
npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-
```
