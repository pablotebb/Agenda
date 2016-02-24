<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard; // añadimos
class Admin
{
    protected $auth;
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($this->auth->user());
            // user() es simplemente el modelo que lo encontramos
            // en User.php, y nos devuelve el usuario que está
            // actualmente autentificado.
        //dd($this->auth->user()->admin());
        if($this->auth->user()->admin())
        {
            return $next($request);
        }
        else
        {
            abort(401);
        }
    }
}
