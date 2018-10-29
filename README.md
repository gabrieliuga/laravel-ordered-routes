# laravel-ordered-routes
Add order to routes

## Install the package
```php
composer require giuga/laravel-ordered-routes
```

## Change the default application loaded in bootstrap/app.php

Find

```php
$app = new \Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);
```

Replace with
```php
$app = new \Sk\Application(
    realpath(__DIR__.'/../')
);
```

## Change the default Route alias in config/app.php

Find
```php
'aliases' => [
...
'Route' => Illuminate\Support\Facades\Route::class,
...
```

Replace with
```php
'aliases' => [
...
'Route' => Sk\Routing\Facades\OrderRoute::class,
...
```

## routes/web.php

By using this package you have the ability to define routes in what ever order you want.

In the example below the {slug?} would catch also the home route even if this was not our intention. By defining an order, 
if the requested url matches a predefined route like /home and /home does not have a higher order number than {slug?} home will be used.
```php
Route:get('{slug?}', function($slug){ return $slug; } )->name('named.slug')->order(999);
Route:get('/home'), function(){ return 'This is my Home'; })->name('home');
```
