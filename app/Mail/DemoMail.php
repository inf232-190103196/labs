<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var
     */
    public $demo;
     /** 
     *
     * @return void
     */
    public function __construct($demo)
    {
$this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('abdualievsultan47@gmail.com')->view('mails.demo')->text('mails.demo')->with(
            [
            'testVarOne' => '1',
            'testVarTwo' => '2',
        ]);
    }
}
