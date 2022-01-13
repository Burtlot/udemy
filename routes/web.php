<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome/{name?}/{lastname?}/{age?}', [WelcomeController::class, 'welcome'])
    ->where([
        'name' => '[a-zA-Z]+',
        'lastname' => '[a-zA-Z]+',
        'age' => '[0-9]{1,3}'
    ]);;

Route::get('/users', function () {
    $users = [];
    $faker = Faker\Factory::create('it_IT');
    foreach (range(0,10) as $index){
        $user = new stdClass();
        $user->name = $faker->name;
        $user->indirizzo = $faker->address;
        $users[] = $user;
    }
    //return $users;
    //return ['John', 'David'];
    return view('users');
});
