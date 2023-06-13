<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function doRegisterUser(Request $request){

        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'same:confirm'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login');
    }

    public function doLoginUser(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $token = Auth::getRecallerName();
            return redirect('/');
        } else {
            $errors = ValidationException::withMessages([
                'login' => ['Invalid login information, try again'],
            ]);
            throw $errors;
        }
        return redirect('/');

    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    function getquiz()
    {
        // $getongoing = NULL;
        $data = NULL;
        $getongoing = Auth::user()->id;


        $reserve = DB::table('quizzes');
        $data = $reserve
        ->select(DB::raw('quizzes.id, quizzes.question, quizzes.answer,  GROUP_CONCAT(quiz_answers.answer) AS all_answers, GROUP_CONCAT(quiz_answers.id) AS all_id_answers' ))
        ->leftjoin('quiz_answers', 'quizzes.id', 'quiz_answers.quiz_id')
        ->groupbyRaw("quizzes.id, quizzes.question, quizzes.answer;")
        ->get();

        $status = DB::table('users')->where('id', $getongoing)->first();
        if($status->statusquiz == '1'){
            return redirect()->route('quizresult');
        }

       

        return view('quiz')->with('data', $data);
        
    }

    public function quiztest(Request $request)
    {
        $getongoing = Auth::user()->id;
       

        $data = NULL;

        $score=0;

        $length = count($request["ans"]);

        for($i = 1; $i <= $length; $i++){

            $soal = $request["ans"][$i];
            $jwb= $request["ans2"][$i];
            // $type= $request["tipe"][$i];

           
            if($soal == $jwb)
            {
                $score += 1;
            }
        }


        $user = DB::table('users')->where('id', $getongoing)->first();
        DB::table('users')->updateOrInsert(
            ['id'=> $getongoing],[
            'id' => $getongoing,
            'score' => intval($score),
            'statusquiz' => 1,
        ]);

        // echo "<script>alert('Jawaban Berhasil Disimpan');</script>";
        return redirect()->route('quizresult');
    }

    function quizresult()
    {
        $getongoing = Auth::user()->id;
        $data = NULL;
        $data = DB::table('users')->where('id', $getongoing)->first();
        return view('quizresult')->with('data', $data->score);
    }
}
