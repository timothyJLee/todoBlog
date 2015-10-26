<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about');           //Still have to make PagesController

Route::get('resume', 'PagesController@resume');

Route::get('projects', 'PagesController@projects');

Route::get('contact', 'PagesController@contact');


Route::model('tasks', 'Task');
Route::model('projects', 'Project');
//Route::model('users', 'User');

Route::bind('tasks', function($value, $route){
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route){
	return App\Project::whereSlug($value)->first();
});
//Route::bind('users', function($value, $route){
//	return App\User::whereSlug($value)->first();
//});

//Route::resource('users', 'UsersController');

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');