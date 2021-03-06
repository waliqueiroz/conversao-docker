<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class SendMailUsuarioIndicado extends Mailable
{
    use Queueable, SerializesModels;
    protected $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("testeFFWD@mail.com")->subject("Novo cadastro por link de indicação")->view('emails.indicado')->with([
            'usuario' => $this->usuario,
        ]);
    }
}
