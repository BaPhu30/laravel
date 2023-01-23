<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class SendMail extends Mailable
{
    use Queueable, SerializesModels;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $shop)
    {
        $this->subject = $subject;
        $this->shop = $shop;
    }
 
    /**
     * Get the message content definition.
     *
     * @return 
     */
    public function build()
    {
        return $this->view('buyer.register.store')->subject($this->subject)->with($this->shop);
    }
}