@extends('layouts.layout')
@section('content')
    <h1>Home</h1>
    <div class="container-fluid">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, culpa! Molestiae unde fugiat soluta sequi harum magni
        consectetur a at maiores facere corporis veritatis recusandae, provident totam numquam aspernatur aperiam?
    </div>

    <div class="container-fluid">
        <h2 class="mt-5">Pasos Instalación Laravel 9</h2>
        <ol class="mt-2">
            <li> composer create-project laravel/laravel visagov-crud 9</li>
            <li> php artisan --version = 9.52.16</li>
            <li> Llamar a Bootstrap 5 sin instalación con sus CDN en la página layout.blade.php con "yield"</li>
            <li> php artisan make:controller BookController --resource --model=Book</li>
            <li> php artisan make:migration create_book_table</li>
            <li> php artisan migrate</li>
            <li> php artisan make:seeder BookTableSeeder</li>
            <li> php artisan db:seed --class=BookTableSeeder</li>
        </ol>
    </div>
@endsection
