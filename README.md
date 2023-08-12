# Laravel Employees CRUD

This is built on Laravel Framework 8.1. This was built for demonstrate purpose.

## Installation

Clone the repository-
```
git clone https://github.com/ejnarStudios/employee-crud.git
```

Then cd into the folder with this command-
```
cd employee-crud
```

Then do a composer install
```
composer install
```

Then cd into the folder with this command-
```
cd employee-crud
``` 

Then create a environment file using this command-
```
cp .env.example .env
```

For windows users -

copy paste the .env.example file in your project directory and rename the file .env - Copy.example  to  .env


Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `employee_crud` and then do a database migration using this command-
```
php artisan migrate
```


At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate

```
 

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any query please contact at prabhu.k.code@gmail.com
"# employee-crud" 
