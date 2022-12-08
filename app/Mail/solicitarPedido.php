<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class solicitarPedido extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud de pedido";

    public $comic;
    public $proveedorComic;
    public $cantidad;
    public $usuario;

    public function __construct($comic, $proveedorComic ,$cantidad, $usuario)
    {
        $this->comic = $comic;
        $this->proveedorComic = $proveedorComic;
        $this->cantidad = $cantidad;
        $this->usuario = $usuario;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Solicitar Pedido',
        );
    }
    public function content()
    {
        return new Content(
            view: 'parciales.inventario.comic.pdf-pedido',
        );
    }

    public function attachments()
    {
        return [];
    }
}
