<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
class DenunciaRecibida extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mensaje;
   
    protected $evidencias;
    
    public function __construct($mensaje,$evidencias)
    {
        $this->mensaje=$mensaje;
        $this->evidencias=$evidencias;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     
     
        
       
      $email= $this->view('emails.denuncia');
    
      
       foreach($this->evidencias as $evidencia){
        
        $url=storage_path()."/app/".$evidencia['imagen'];
        $email->attach($url);
       }
      
    
    return $email;
    
 
    }
}

