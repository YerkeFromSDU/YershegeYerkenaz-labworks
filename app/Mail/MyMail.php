<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
  
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ershege.erkenaz@gmail.com')
                    ->view('emails.demoMail')
                    ->text('emails.demo_plain')
                    ->with(
                        [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                        ]);
    }
}