<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle(){
        $botman = app('botman');
        $botman->hears('{message}', function($botman,$message){
            if($message == "hi"){
                $this->askName($botman);
            } else {
                $botman->replay("Write 'hi' for testing");
            }
        });
        
        $botman->listen();
    }

    public function askName($botman){
        $botman->ask("Salam kenal ya, semoga chat ini bisa ngebantu komunikasi kita makin lancar. Apa ada 
        yang bisa kami bantu? Kami menyediakan layanan konsultasi mengenai perawatan air, ikan dan lain sebagainya. ", function(Answer $answer){
            $name = $answer->getText();

            $this->say('Terkait pertanyaan lebih lanjut bisa menghubungi melalui whatsapp, dengan link berikut ini https://wa.link/hbsl5j');
        });
    }
}
