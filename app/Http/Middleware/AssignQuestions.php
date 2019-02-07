<?php

namespace App\Http\Middleware;

use Closure;

use DB;

use Auth;

class AssignQuestions
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
        //$param = $request->route('question_id');


        //$user = Auth::user()->id;

        //the max number of assignment is six;
        

        return $next($request);        
              
    }
}
