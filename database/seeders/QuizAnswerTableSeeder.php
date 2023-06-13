<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuizAnswer;


class QuizAnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 1-2
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '1';
        $quizans->answer = 'It is a game';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '1';
        $quizans->answer = 'It is a dangerous file for my PC';
        $quizans->save();
        // 2 3-4
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '2';
        $quizans->answer = 'Once every 10 years';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '2';
        $quizans->answer = 'Less than 6 months';
        $quizans->save();
        // 3 5-6
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '3';
        $quizans->answer = 'True';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '3';
        $quizans->answer = 'False';
        $quizans->save();
        // 4 7-8
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '4';
        $quizans->answer = 'Check the files on your pc';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '4';
        $quizans->answer = 'Do not plug in into your PC';
        $quizans->save();
        // 5 9-10
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '5';
        $quizans->answer = 'Open it';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '5';
        $quizans->answer = 'Instantly remove it permanently';
        $quizans->save();
        // 6 11-12
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '6';
        $quizans->answer = 'Install it';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '6';
        $quizans->answer = 'Ignore It';
        $quizans->save();
        // 7 13-14
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '7';
        $quizans->answer = 'True';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '7';
        $quizans->answer = 'False';
        $quizans->save();
        // 8 15-16
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '8';
        $quizans->answer = 'True';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '8';
        $quizans->answer = 'False';
        $quizans->save();
        // 9 17-18
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '9';
        $quizans->answer = 'True';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '9';
        $quizans->answer = 'False';
        $quizans->save();
        // 10 19-20
        $quizans = new QuizAnswer();
        $quizans->quiz_id = '10';
        $quizans->answer = 'Force It';
        $quizans->save();

        $quizans = new QuizAnswer();
        $quizans->quiz_id = '10';
        $quizans->answer = 'Change It';
        $quizans->save();
    }
}
