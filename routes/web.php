

 <?php

 require_once __DIR__ . '/forumRoutes/index.php';

use App\Http\Controllers\blogController;
use App\Http\Controllers\forumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/index_blog', [forumController::class, 'accueil'])->name('accueil');
Route::get('/Blog', [blogController::class, 'index'])->name('blog');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

