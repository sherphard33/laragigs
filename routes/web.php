<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
    return view('listings', [
        'heading' => 'Latest things',
        'listings'=> Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id){
    $res = Listing::find($id);
    return response()->json(
        [
            'id' => $res['id'],
            'title' => $res['title']
        ]
    );
});

Route::get('/posts/{id}', function($id){
    //Die & dumb
    dd($id);
    //Die dumb & debug
    ddd($id);
  return response('Post '.$id, 200);
})-> where('id', '[0-9]+');


Route::get('/search', function(Request $request){
    dd($request->name . ' '. $request->city);
    
});