<?php
/*																		   |
|--------------------------------------------------------------------------|
| Rutas Auth															   |
|--------------------------------------------------------------------------|
|*/
Route::get('/','Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('user/profile/{user}', 'UserController@editProfile')->name('user.edit.profile');;
Route::patch('user/profile/{user}', 'UserController@updateProfile')->name('user.update.profile');;

Route::resource('admin/configurations', 'ConfigurationController');
Route::resource('admin/rols', 'RolController');
Route::resource('admin/users', 'UserController');


Route::get('/admin/user/{user}/menu', 'UserController@menu')->name('user.menu');;
Route::patch('/admin/user/menu/{user}', 'UserController@menuStore')->name('users.menuStore');


Route::get('/admin/option/create/{padre}', 'OptionMenuController@create');
Route::get('/admin/option/orden', 'OptionMenuController@updateOrden');
Route::post('/admin/option/orden', 'OptionMenuController@updateOrden');
Route::resource('/admin/option',"OptionMenuController");
/*																		   |
|--------------------------------------------------------------------------|
| Rutas Home															   |
|--------------------------------------------------------------------------|
|*/
Route::get('/home', 'Resumen_ventas@index');


/*																		   |
|--------------------------------------------------------------------------|
| Rutas Infyom															   |
|--------------------------------------------------------------------------|
|*/
Route::resource('ventas', 'VentasController');
Route::resource('configurations', 'ConfigurationsController');