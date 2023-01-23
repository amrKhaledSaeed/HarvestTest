<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\logicalOr;

use App\Http\Controllers\Api\V1\loginController;
use App\Http\Controllers\Api\V1\PostsController;

$namespace =' \App\Http\Controllers';

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'namespace' => $namespace.'Api\V1',
    'prefix' => 'v1'
],function()
{
    Route::post('/login',[loginController::class,'login']);


    Route::group([
        'middleware'=>'auth:api'
    ],function()
    {
        Route::post('logout',[loginController::class,'logout'])->name('logout');
        Route::get('posts',[PostsController::class,'getPostsAndUsersData'])->name('all.postsAndUser.data');

    }

);
}
);

