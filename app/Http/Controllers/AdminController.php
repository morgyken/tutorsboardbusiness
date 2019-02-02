<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question=  DB::table('question_bodies')

            ->join('question_details', 'question_bodies.question_id', '=', 'question_details.question_id')
            ->orderBy('question_bodies.created_at', 'desc')

            ->paginate(25);

           // dd($question);

        return view('admin.home', 
            [
                'question' => $question
            ]
        );
    }

  

    public function getQuestionPrice()
    {
     
    $user1  = Auth::guard('admin')->user();

    return view ('question.ask-question', ['user' => $user1]);
 }

}
