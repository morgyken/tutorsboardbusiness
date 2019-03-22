<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use DB;

class CustomerHomeController extends Controller
{
    //Get the completed Questions 

    public function __costruct()
    {
        $this->middleware('auth:customer');
    }

    public function index ()
    {
      return view ('customer.cust-landing')
      

    }


    public function getCustomerQuestions ($status= 'completed')
    {

     $questions =  DB::table('question_bodies')
            ->join('question_details', 'question_bodies.question_id', '=', 'question_details.question_id')        
       		->join('question_matrices', 'question_details.question_id', '=', 'question_matrices.question_id')
            ->where('question_matrices.status', '=', $status)
            ->orderBy('question_bodies.created_at', 'desc')
            ->paginate(10); 

          return $questions;

      }
    

}
