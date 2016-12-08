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
    	$router = $this->app['router'];


        $router->group(['prefix' => 'api/v1/'], function() use ($router)
        {


            $router->group(['prefix' => 'auth/'], function() use ($router)
            {
                $router->post('login', AuthController::class . '@postLogin');
                $router->post('register', AuthController::class . '@postRegiser');
                $router->post('verify', AuthController::class . '@postValidate')->Middleware(['user.auth']);
                $router->post('logout', AuthController::class . '@postLogout');
            });

            $router->group(['prefix' => 'account'],function() use($router){
                $router->post('update', ProfileController::class . '@postProfile')->Middleware(['user.auth']);
                $router->post('update_image', ProfileController::class . '@postProfileImage')->Middleware(['user.auth']);
                $router->post('change_password',ProfileController::class . '@postUpdatePassword')->Middleware(['user.auth']);

            });

            $router->group(['prefix' => 'profile/'], function() use($router) {
                
                $router->group(['prefix' => '{username}'],function() use ($router)
                {
                    $router->get('', ProfileController::class . '@getProfile');
                    $router->get('/image/{hash}', ProfileController::class . '@getProfileImage')->where('hash', '(.*)(.png)$');

                
                });
                
            });

        });



    	$this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(AuthenticationServiceInterface::class, AuthenticationService::class);
 	}

}


 // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
