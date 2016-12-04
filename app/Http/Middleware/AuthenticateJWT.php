<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthenticateJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {


         try{
            $user = JWTAuth::parseToken()->authenticate();
            $request->route()->setParameter('user', $user);
              
         } catch(Tymon\JWTAuth\Exceptions\TokenBlacklistedException $e){
          
            return response()->json(['token_black_listed'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        
        } 



        return $next($request);
    }
}
