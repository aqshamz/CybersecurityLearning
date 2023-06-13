<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;


class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $quizsesc = new Quiz();
        $quizsesc->question = 'What is virus in your PC mean?';
        $quizsesc->answer = '2';
        $quizsesc->save();
        // 2
        $quizsesc = new Quiz();
        $quizsesc->question = 'How long do we have to change our password?';
        $quizsesc->answer = '4';
        $quizsesc->save();
        // 3
        $quizsesc = new Quiz();
        $quizsesc->question = 'Logging into online banking on public networks, such as internet cafes,
        libraries or public Wi-Fi is always safe.';
        $quizsesc->answer = '6';
        $quizsesc->save();
        // 4
        $quizsesc = new Quiz();
        $quizsesc->question = 'If you find a flashdisk on public place, what will you do?';
        $quizsesc->answer = '8';
        $quizsesc->save();
        // 5
        $quizsesc = new Quiz();
        $quizsesc->question = 'If you download a pdf file that have .exe in the postfix, what will you do?';
        $quizsesc->answer = '10';
        $quizsesc->save();
        // 6
        $quizsesc = new Quiz();
        $quizsesc->question = 'If there is an app say that you can get instant money, what will you do?';
        $quizsesc->answer = '12';
        $quizsesc->save();
        // 7
        $quizsesc = new Quiz();
        $quizsesc->question = 'The best password include your name, age or birthday';
        $quizsesc->answer = '14';
        $quizsesc->save();
        // 8
        $quizsesc = new Quiz();
        $quizsesc->question = 'You can totally share your password with your best friend, you trust them!';
        $quizsesc->answer = '16';
        $quizsesc->save();
        // 9
        $quizsesc = new Quiz();
        $quizsesc->question = 'Whatever you post online will stay there forever even if you delete it';
        $quizsesc->answer = '17';
        $quizsesc->save();
        // 10
        $quizsesc = new Quiz();
        $quizsesc->question = 'If you have a weak password, what should you do ?';
        $quizsesc->answer = '20';
        $quizsesc->save();

        // $role = new Role();
        // $role->name = 'perusahaan';
        // $role->save();
    }
}
