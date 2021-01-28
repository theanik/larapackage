
# Laravel Extra Command
A simple package for create ** Repository, Repository with Interface, Service, Trait** form command line using `php artisan` command.\
[Note : This package also worked for [nWidart/laravel-modules](https://github.com/nWidart/laravel-modules)]

## Installation
Require the package with composer using the following command:

`composer require theanik/laravel-extra-command --dev`

Or add the following to your composer.json's require-dev section and `composer update`

```json
"require-dev": {
        "theanik/laravel-extra-command": "^0.0.2"
    }
```
## Artisan Commands

## In Laravel Project

Create a repository Class.\
`php artisan make:repository your-repository-name`

Example:
```
php artisan make:repository UserRepository
```
or
```
php artisan make:repository Backend\UserRepository
```

The above will create a **Repositories** directory inside the **App** directory.

Create a repository with Interface.
`php artisan make:repository your-repository-name -i`

Example:
```
php artisan make:repository UserRepository -i
```
or
```
php artisan make:repository Backend\UserRepository -i
```
Here you need to put extra `-i` flag.
The above will create a **Repositories** directory inside the **App** directory.


Create a Service Class.
`php artisan make:service your-service-name`

Example:
```
php artisan make:service UserService
```
or
```
php artisan make:service Backend\UserService
```
The above will create a **Services** directory inside the **App** directory.

Create a Trait.
`php artisan make:trait your-trait-name`

Example:
```
php artisan make:trait HasAuth
```
or
```
php artisan make:trait Backend\HasAuth
```
The above will create a **Traits** directory inside the **App** directory.



## In [nWidart/laravel-modules](https://github.com/nWidart/laravel-modules) Modules

Create a repository Class.\
`php artisan module-make:repository your-repository-name {module-name}`

Example:
```
php artisan module-make:repository UserRepository Blog
```
or
```
php artisan make:repository Backend\UserRepository Blog
```

The above will create a **Repositories** directory inside the **{Module}** directory.

Create a repository with Interface.
`php artisan make:repository your-repository-name {module-name} -i`

Example:
```
php artisan module-make:repository UserRepository -i Blog
```
or
```
php artisan module-make:repository Backend\UserRepository -i Blog
```
Here you need to put extra `-i` flag.
The above will create a **Repositories** directory inside the **{Module}** directory.


Create a Service Class.
`php artisan module-make:service your-service-name {module-name}`

Example:
```
php artisan module-make:service UserService
```
or
```
php artisan module-make:service Backend\UserService
```
The above will create a **Services** directory inside the **{Module}** directory.

Create a Trait.
`php artisan make:trait your-trait-name {module-name}`

Example:
```
php artisan make:trait HasAuth
```
or
```
php artisan make:trait Backend\HasAuth
```
The above will create a **Traits** directory inside the **{Module}** directory.


Example:

```
<?php

namespace DummyNamespace;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DummyClass.
 */
class DummyClass extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class
    }
}

```

<a href="https://www.buymeacoffee.com/fMy8dmHGl" target="_blank"><img src="https://bmc-cdn.nyc3.digitaloceanspaces.com/BMC-button-images/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>


