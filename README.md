# caffeinated-db-repository
Database repository for caffeinated/modules in Laravel

## About
This stores your modules in the database, so you can use modules in a load-balanced environment

## Installation

```
composer require avram/caffeinated-db-repository
```

## Setup

Publish migration with:
```
php artisan vendor:publish --provider="Avram\\Caffeinated\\Providers\\DatabaseModulesServiceProvider"
php artisan migrate
```

## Config

Edit `config/modules.php` and set the database driver:
```
'driver' => 'custom',
'custom_driver' => \Avram\Caffeinated\Repositories\DatabaseRepository::class,
```

Then run this to load modules into database:
```
php artisan module:optimize
```

## Note
This was made for one of my own projects built with older version of Laravel. Let me know or create an issue/PR if it doesn't work on 6.x
