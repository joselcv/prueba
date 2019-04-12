<?php
namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\DB;


class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        

        $request->validate([
            'ide'=>'required',
            'usu'=>'required',
            'pass'=>'required'
          ]);
       
            $usuario = DB::table('usuarios')->where('usu_cedula', $request->get('ide'))->first();

            if($usuario->usu_cedula==$request->get('ide') 
            && $usuario->usu_login==$request->get('usu')  
            && $usuario->usu_clave==$request->get('pass') ){

                if($usuario->tusu_codigo==1){
                    //cajero
                    return $next($request);
                    
                    // return redirect()->route('tdousuario.index');
                }else if($usuario->tusu_codigo==2){
                    // Asesor comercial
                    return $next($request);
                    // return redirect()->route('tdousuario.index');
                }   
            }else{
                return $next($request);
        }

    }
}
