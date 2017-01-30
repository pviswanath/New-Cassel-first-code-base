<?php

/**
 *|--------------------------------------------------------------------------
 *| Application Routes
 *|--------------------------------------------------------------------------
 *|
 *| Here is where you can register all of the routes for an application.
 *| It's a breeze. Simply tell Laravel the URIs it should respond to
 *| and give it the controller to call when that URI is requested.
 *|
 *
 * @category   Application Routes
 * @package    Basic-Routes
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

Route::get('/', function () {
    return view('auth/login');
});

Route::get('php-version', function()
{
    return phpinfo();
});

Route::get('laravel-version', function()
{
    $laravel = app();
    return 'Your Laravel Version is '.$laravel::VERSION;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

     Route::auth();
    Route::post('change-password', 'Auth\AuthController@updatePassword');
    Route::get( 'change-password', 'Auth\AuthController@updatePassword');

    Route::get('/home', 'HomeController@index');




    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');

/*    Route::get('/redirect', 'SocialAuthController@redirect');
    Route::get('/callback', 'SocialAuthController@callback');*/


Route::get('/reset', 'Auth\AuthController@showPasswordEmailPage');

Route::get('/createPassword', 'Auth\PasswordController@showUserPasswordChange');

Route::post('/createNewPassword', 'Auth\PasswordController@createNewPassword');


Route::post('/sendemail', function () {

    $data = array(
        'name' => $_POST['email'],
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('newcassel@domain.com', 'New Cassel Work Order System');
        $message->to($_POST['email'])->subject('Password Setup');

    });

    return view('auth.passwords.emailconfirmation');
});