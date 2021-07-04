<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Jordimiddleware
{
  
    public function handle($request, Closure $next)
    {
        $dia= array ("Domingo","Lunes", "Martes","Miércoles","Jueves","Viernes", "Sabado");
        if(date('w')==='1'){
            echo "Es lunes. ¡Bienvenido!";
        }else{
            echo "Hoy es día ".$dia[date("w")].strftime(" de %B de %Y");
            echo "<br>";
        }
        return $next($request);
    }    
 
}
