<?php

namespace App\Http\Middleware;

use Closure;
use App\rooms_model;

class checkReservations
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
        $rooms_model=rooms_model::all();
        $today=date('d/m/Y', strtotime(date("F j, Y")));
        $date=date('d/m/Y',strtotime($rooms_model[0]['reservation_date']));
        foreach ($rooms_model as $value) {
            if($value['reservation_date']<$today){
                
            }
        }
        return $next($request);
    }
}
