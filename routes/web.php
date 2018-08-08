<?php

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

/*
Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/home', function () {
    return view('home');
});


Route::get('/foo', function () {
     return view('foo');
})->name('foo');



Route::get('/bar', function () {
     return view('bar');
})->name('bar');



Route::get('/shoutout/{text}', function ($text) {
	$colors = array(
		"red " 	=> "means passion", 
		"green" => "color of nature", 
		"blue "	=> "it is the color of the sky", 
		"white"	=>	"pureness", 
		"black"	=> "being bold", 
		"silver"=>	"authentic", 
		"gold"	=> "mahalon"
		);

     return view('shoutout', 
		array(
			'text'  => $text,
     		'colors' => $colors
     	));
     
})->name('shoutout');



*/
/*
Route::get('/',function (){
	return view('welcome');
});

Route::get('/basic-arithmetic/{operation}/{num1}/{num2}',function ($operation, $num1, $num2){

	return view('basic-arithmetic',
			array('operation' => $operation,
					'num1'	    => $num1,
					'num2'	    => $num2,
					'sum'		=> $sum=$num1+$num2,
					'diff'		=> $diff=$num1 - $num2,
					'mul'		=> $mul=$num1 * $num2,
					'div'		=> $div =$num1 / $num2));

})->name ('basic-arithmetic');

*/

Route::get('/crushes','CrushesController@index');

Route::get(	'/crushes/create','CrushesController@create')->name('crushes.create');

Route::post('/crushes/store','CrushesController@store')->name('crushes.store');
	
Route::get(	'/crushes','CrushesController@index')->name( 'crushes.index');

Route::get(	'/crushes/{id}/edit','CrushesController@edit')->name('crushes.id.edit');

Route::post( '/crushes/{id}/update','CrushesController@update')->name('crushes.id.update');

Route::get(	'/crushes/{id}/destroy','CrushesController@destroy')->name('crushes.id.destroy');
