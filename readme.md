# Laravel CMS Example Installation

Example standard installation of the Laravel CMS.

CMS packages installed

- [Laravel CMS Core](https://github.com/czim/laravel-cms-core)
- [Laravel CMS Auth](https://github.com/czim/laravel-cms-auth)
- [Laravel CMS Models Module](https://github.com/czim/laravel-cms-models)
- [Laravel CMS Theme](https://github.com/czim/laravel-cms-theme)


Application packages used

- [Translatable](https://github.com/dimsav/laravel-translatable)
- [Listify](https://github.com/czim/laravel-listify)

## Installation

1. Run the CMS migrations:

```bash
php artisan cms:migrate
```

2. Create an admin user account:

```bash
php artisan cms:user:create <name> <password> --admin
```

## Application

The example application combines a simple product catalog structure with a blog.  
The models are generally designed to showcase different model fields.

Note that this is not even really an application, but just the database structure and models that could be used to make a real application.  
It serves merely as an illustration for the implementation of the CMS.


