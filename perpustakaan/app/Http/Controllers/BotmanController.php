<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Handle the incoming messages from the Botman chatbot.
     */
    public function handle()
    {
        $botman = app('botman');

        // Listen for any message
        $botman->hears('{message}', function ($botman, $message) {
            $message = strtolower($message);

            // If the user says 'hi', show options directly
            if ($message == 'hi') {
                $this->showOptions($botman);
            } else {
                $botman->reply("Untuk memulai pembicaraan dengan bot ketiklah HI.");
            }
        });

        $botman->listen();
    }

    /**
     * Show options for types of assistance using buttons.
     */
    public function showOptions($botman)
    {
        // Create a question with buttons
        $question = Question::create('Apakah Anda perlu bantuan dengan salah satu layanan berikut?')
            ->addButtons([
                Button::create('Konsultasi Hukum')->value('konsultasi hukum'),
                Button::create('Bantuan Hukum')->value('bantuan hukum'),
                Button::create('Penyuluhan Hukum')->value('penyuluhan hukum'),
            ]);

        // Ask the question
        $botman->ask($question, function (Answer $answer) {
            // Get the user's selection
            $selected = strtolower($answer->getText());

            // Respond based on the selection
            switch ($selected) {
                case 'konsultasi hukum':
                    $this->say("Untuk konsultasi hukum, klik tautan ini untuk WhatsApp: <a href='https://wa.me/628998887766?text=Halo,%20saya%20butuh%20konsultasi%20hukum' target='_blank'>Konsultasi Hukum</a>.");
                    break;
                case 'bantuan hukum':
                    $this->say("Untuk Bantuan hukum, klik tautan ini untuk WhatsApp: <a href='https://wa.me/628998887766?text=Halo,%20saya%20butuh%20Bantuan%20hukum' target='_blank'>Bantuan Hukum</a>.");
                    break;
                case 'penyuluhan hukum':
                    $this->say("Untuk Penyuluhan hukum, klik tautan ini untuk WhatsApp: <a href='https://wa.me/6289680510618?text=Halo,%20saya%20butuh%20Penyuluhan%20hukum' target='_blank'>Penyuluhan Hukum</a>.");
                    break;
                default:
                    $this->say('Maaf, pilihan Anda tidak dikenali. Silakan coba lagi.');
            }
        });
    }
}
