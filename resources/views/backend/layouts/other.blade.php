
menubar active code


@php()
$prefix=Request::route()->getPrefix;
$route=Route::current()->getName;

@endphp

show menu

{{($prefix=='/users')?'menu-open':''}}

{{($route=='users.view')?'active':''}}



Middleware group

Route::group(['middleware'=>'test'], function(){


Route::group(['prefix'=>'users'], function(){

Route::get('/view', 'Backend\UserController@view')->name('users.view');
Route::get('/add', 'Backend\UserController@add')->name('users.add');
Route::post('/store', 'Backend\UserController@store')->name('users.store');
Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});


});
