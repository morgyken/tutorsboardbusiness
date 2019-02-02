<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\UpdateQuestionController;

use DB;

use App\Http\Controllers\HomeController;

use Auth;

class QuestionBidsController extends Controller
{

    

    private $active_questions;

        public function __costruct()
    {
        $this->middleware('web');
    }


    public function PostNewBids(Request $request, $question_id)
    {


        $tutor_id = Auth::user()->id;

        $checkbid = DB::table('question_bids')->select('tutor_id')
                    ->where('tutor_id', $tutor_id)->first();

    if($checkbid  == null)
        {

        //avoid bidding twice for the same tutor

            DB::table('question_bids')->insert(
            [
                'bidpoints' => $this->CalculatePoints(), //calculate bidpoints

                'tutor_id' =>Auth::user()->id,
                'question_id' =>$question_id,

               // 'question_deadline' =>$request->question_deadline,

              //  'bid_price' =>$request->bid_price,

                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

        }

     return redirect('question_det/'.$question_id);
    }

     public function CalculatePoints()
     {

     	$suggeststed = 0;

        $points = 10;

     	//check number of Questions Answered and success rate 

     	$questions_ans = DB::table('assign_questions')
     				->where('tutor_id', Auth::user()->id)
     				->where('status', 'completed')
     				->get();

     	$number_ans = count($questions_ans);

        $points += 8 * $number_ans;

     	//check if the Tutor has anwered the Customer Question... Suggested 

     	$ans_prev = DB::table('assign_questions')
     				->where('tutor_id', Auth::user()->id)
     				->where('status', 'completed')
     				->get();

        $points += 5.7 * count ($ans_prev);

     	if($ans_prev != NULL)
     	{
     		$suggeststed = 1;
            
     	}

     	//Check online Points... Earn point for each login... earn points for each 10 bids in a day

     	$login_meta = DB::table('login_metas')
     					->where('tutor_id', Auth::user()->id) //make this user id
     					->get();
     	$login_count = count ($login_meta); 

        $points += 1.2 * $login_count;

         	//Return points for the bid

        return round($points); //return points rounded to nearest 1

     }


public function AssignQuestion ( Request $request, $question, $tutor=null)
    {

        //if tutor is senior then assign Questions

        //maximum of questions assinged is 

        //unlimited for admin_tutor

        //30 for team

        //12 for senior 

        //5 for Junior

        //2 for probation, probation to do 6 successful ones for account to be considered 

        //for promotion, Earn $20 Bonus on promtion. 


        //Check if suspended 

    
    //get the number of assigned questions which are currently active 

    $active = DB::table('question_history_tables')
                ->where('user_id', Auth::user()->email) 
                ->where('status', 'Assigned')
                ->get();

    $count_active = count($active);


    //check for admin who is in the tuting 

    if($level == 'admin'){
        $this->AssignQuestions($question); //assign express if admin
    }

    //check if a team member is tutoring
    if($level == 'team' )
    {
         if($count_active < 14)
        {
             $this->AssignQuestions($question); //assign express if admin
        }
    }

    //check if senior 

    if($level == 'senior' )
    {
         if($count_active < 8)
        {
             $this->AssignQuestions($question); //assign express if admin
        }
    }

    ///check if Junior 

    
    if($level == 'junior' )
    {
         if($count_active < 5)
        {
             $this->AssignQuestions($question); //assign express if admin
        }
    }

    if($level == 'New' )
    {
         if($count_active <3)
        {
             $this->AssignQuestions($question); //assign express if admin
        }
    }
      //return home

    return redirect()->back();


    }

    public function AssignQuestions ($question)
    {

        $update = new UpdateQuestionController();

        $status =  "Assigned";

        $message = "The Question has been Assigned ";

         DB::table('question_matrices')->where('question_id', $question)
                    ->update(
                    [     
                                           
                        'status' =>$status,

                        'message' =>$message,

                        'user_id' => Auth::user()->id, 
                                             
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

          DB::table('question_history_tables')
                ->insert(
                    [       
                                             
                        'status' =>$status,

                        'question_id' => $question,
                 
                        'user_id' => Auth::user()->id,

                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

    }




}
