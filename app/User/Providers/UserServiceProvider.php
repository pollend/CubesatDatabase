<?php 

namespace App\User\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use App\User\Repositories;

use App\User\Repositories\ProfileRepository;
use App\User\Repositories\ProfileRepositoryInterface;
use App\User\Repositories\UserRepository;
use App\User\Repositories\UserRepositoryInterface;
use App\User\Services\AuthenticationService;
use App\User\Services\AuthenticationServiceInterface;

use App\User\Http\Controllers\AuthController;
use App\User\Http\Controllers\ProfileController;

use App\User\Middleware\AuthenticateUser;

class UserServiceProvider extends EventServiceProvider
{

	/**  
    * The event listener mappings for the application.
    *
    * @var array
    */
    protected $listen = [
    ];


    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        \Route::group(['prefix' => 'api/v1/'], function() {
            \Route::group(['prefix' => 'auth/'], function() {
                \Route::post('login', AuthController::class . '@postLogin');
                \Route::post('register', AuthController::class . '@postRegiser');
                \Route::post('verify', AuthController::class . '@postValidate')->Middleware(['user.auth']);
                \Route::post('logout', AuthController::class . '@postLogout');
            });

            \Route::group(['prefix' => 'account'],function() {
                \Route::post('update', ProfileController::class . '@postProfile')->Middleware(['user.auth']);
                \Route::post('update_image', ProfileController::class . '@postProfileImage')->Middleware(['user.auth']);
                \Route::post('change_password',ProfileController::class . '@postUpdatePassword')->Middleware(['user.auth']);

            });

            \Route::group(['prefix' => 'profile/'], function() {

                \Route::group(['prefix' => '{username}'],function() {
                    \Route::get('', ProfileController::class . '@getProfile');
                    \Route::get('/image/{hash}', ProfileController::class . '@getProfileImage')->where('hash', '(.*)(.png)$');
                });
            });
        });

    	$this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(AuthenticationServiceInterface::class, AuthenticationService::class);
 	}

}


 // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
