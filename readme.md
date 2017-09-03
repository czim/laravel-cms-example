# Laravel CMS Example Installation

Example standard installation of the Laravel CMS.

CMS packages installed

- [Laravel CMS Core](https://github.com/czim/laravel-cms-core)
- [Laravel CMS Auth](https://github.com/czim/laravel-cms-auth)
- [Laravel CMS Theme](https://github.com/czim/laravel-cms-theme)
- [Laravel CMS ACL Module](https://github.com/czim/laravel-cms-acl-module)
- [Laravel CMS Models Module](https://github.com/czim/laravel-cms-models)
- [Laravel CMS File Upload Module](https://github.com/czim/laravel-cms-upload-module)


Application packages used

- [Translatable](https://github.com/dimsav/laravel-translatable)
- [Listify](https://github.com/czim/laravel-listify)
- [Stapler](https://github.com/CodeSleeve/laravel-stapler)


## Laravel Versions

The master branch has the latest version of Laravel.

For examples of older Laravel versions, check out the branch specific for that version. 

## Installation

Besides the normal procedure for getting a laravel installation running (`composer install`), follow these additional steps:

### For running with Docker

If you have Docker, the Makefile will help you get set up quickly.

1. To compose the application, migrate and seed it, simply run:

    ```bash
    make
    ```
    
    This may take some time.

2. Optionally, to speed things up, run:

    ```bash
    make cache
    ```
    
    This will cache CMS information, Laravel config & routes.

Your application will then run on `http://localhost:8000/cms` if all went well.

### For running in a custom environment

1. First, set up the `.env` file by running:
    
    ```bash
    make env
    ```

    Or make an `.env` file manually. 
    Don't forget to set up app key using `php artisan key:generate`.

2. Run the CMS migrations:

    ```bash
    php artisan cms:migrate
    ```

3. Run the database seeder:

    ```bash
    php artisan db:seed
    ```
    
    Three user accounts will be ready to use:
    
    - A super-admin: `super@admin.com`, password: `'secret'`.
    - A user with editing, but not delete permissions: `some@editor.com`, password: `'secret'`.
    - A guest user with only viewing permissions: `some@guest.com`, password: `'secret'`.

4. Optionally, create a custom super-admin account:

    ```bash
    php artisan cms:user:create <name> <password> --admin
    ```

5. Optionally, to speed things up, cache some data:

    ```bash
    php artisan cms:menu:cache
    php artisan cms:models:cache
    php artisan config:cache
    php artisan route:cache
    ```

After this, the application should be ready.

The relative path to the CMS is `/cms`, f.i. as: `http://laravel-cms-example.dev/cms`.


## Application

The example application combines a simple product catalog structure with a blog.  
The models are generally designed to showcase different model fields.

Note that this is not even really an application, but just the database structure and models that could be used to make a real application.  
It serves merely as an illustration for the implementation of the CMS.

