Installation

clone: https://github.com/mokgosi/productdb.git

From projet folder, run

-- composer update


===========================================================================

DATABASE SETTINGS:

From your mysql console, run:

>create database productsdb;

Change your .evn to these values

DB_DATABASE=productsdb

DB_USERNAME=root

DB_PASSWORD=

============================================================================

COMPLETE INSTALLATION

From projet folder, run the following commands to complete installation

-- php artisan migrate

-- php artisan db:seed



============================================================================

TEST YOUR APP

From projet folder, run

-- php artisan serve


Then, Browse to http://localhost:8000/ on your browser

Login details:

username/email: user@mail.com

password: secret