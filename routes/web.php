<?php
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Sentinel', 'middleware'=>['admin']], function(){
	Route::get('register', 'RegisterController@create')->name('register.create');
	Route::post('register', 'RegisterController@store')->name('register.store');

});

Route::get('/user-permissions-setup', function(){
	$user = Sentinel::findById(1);
	return view('settings.permissions.user-permissions');
})->name('user-permissions.create');

Route::post('/user-permissions-setup', function(Request $request){
	$user = Sentinel::findById(1);
	$permissions = array();
	foreach ($request->permissions as  $permission) {
		$permissions[$permission] = true;
	}
	$user->permissions = $permissions;
	$user->save();
})->name('user-permissions.store');


Route::get('menu', function(){
	$user = Sentinel::findRoleBySlug('admin');//Sentinel::findById(1);
	$permissions = array();
	$user_permissions = $user->permissions;
	foreach ($user_permissions as $key => $value) {
		array_push($permissions, $key);
	}
	return view('menu', compact('permissions'));
});

Route::get('/role-permissions-setup', function(){
	$user = Sentinel::findById(1);
	return view('settings.permissions.role-permissions');
})->name('role-permissions.create');

Route::post('/role-permissions-setup', function(Request $request){
	$role = Sentinel::findRoleBySlug('admin');
	$permissions = array();
	foreach ($request->permissions as  $permission) {
		$permissions[$permission] = true;
	}
	$role->permissions = $permissions;
	$role->save();
})->name('role-permissions.store');


