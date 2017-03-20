# Laravel CMS Example Installation

Example standard installation of the Laravel CMS.

CMS packages installed

- [Laravel CMS Core](https://github.com/czim/laravel-cms-core)
- [Laravel CMS Auth](https://github.com/czim/laravel-cms-auth)
- [Laravel CMS Theme](https://github.com/czim/laravel-cms-theme)
- [Laravel CMS ACL Module](https://github.com/czim/laravel-cms-acl-module)
- [Laravel CMS Models Module](https://github.com/czim/laravel-cms-models)


Application packages used

- [Translatable](https://github.com/dimsav/laravel-translatable)
- [Listify](https://github.com/czim/laravel-listify)

## Installation

Besides the normal procedure for getting a laravel installation running (`composer install`), follow these additional steps:

1. Run the CMS migrations:

    ```bash
    php artisan cms:migrate
    ```

2. Run the database seeder:

    ```bash
    php artisan db:seed
    ```
    
    Three user accounts will be ready to use:
    
    - A super-admin: `super@admin.com`, password: `'secret'`.
    - A user with editing, but not delete permissions: `some@editor.com`, password: `'secret'`.
    - A guest user with only viewing permissions: `some@guest.com`, password: `'secret'`.

3. Optionally, create a custom super-admin account:

    ```bash
    php artisan cms:user:create <name> <password> --admin
    ```

4. Optionally, to speed things up, cache some data:

    ```bash
    php artisan cms:menu:cache
    php artisan cms:models:cache
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
