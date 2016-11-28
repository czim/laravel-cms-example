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

Besides the normal procedure for getting a laravel installation running (`composer install`, `php artisan migrate`), follow these additional steps:

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


## .env example

```
APP_ENV=local
APP_KEY=<some key>
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-cms-example
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=redis
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
