<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class AssignedQuestions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $question)
    {
        $assigned = DB::table('question_matrices')
                    ->select('status')
                    ->get();
        //check if assigned is in the question 

        return $next($request);
    }
}
