## Crud Visagov Pasos Instalación

1) composer create-project laravel/laravel visagov-crud 9</li> 
2) php artisan --version = 9.52.16</li>
3) Llamar a Bootstrap 5 sin instalación con sus CDN en la página layout.blade.php con "yield"
4) php artisan make:controller BookController --resource --model=Book
5) php artisan make:migration create_book_table
6) php artisan migrate
7) php artisan make:seeder BookTableSeeder
8) php artisan db:seed --class=BookTableSeeder