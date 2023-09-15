# Form builder back-end

## Project Setup

### Install the dependencies

```
composer update
```

### Configure the database
    1.Open the .env file in the root directory of your Laravel project.

    2.Locate the DB_CONNECTION parameter and set it to sqlite.

    3.Remove or comment out the other database-related configurations (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD) as they won't be needed for SQLite.

    4.Create a new empty file (database file) in the database directory with a .sqlite extension. For example, you can name it database.sqlite.

    DB_CONNECTION=sqlite
    #DB_HOST=127.0.0.1
    #DB_PORT=3306
    #DB_DATABASE=laravel
    #DB_USERNAME=root
    #DB_PASSWORD=

### Run Migrations
```
php run migrations
```

### Serve the Application
```
php artisan serve
```