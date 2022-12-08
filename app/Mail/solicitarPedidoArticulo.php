<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class solicitarPedidoArticulo extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud de pedido";

    public $articulo;
    public $proveedorArticulo;
    public $cantidad;
    public $usuario;
    public $marca;

    public function __construct($articulo, $proveedorArticulo, $cantidad, $usuario, $marca)
    {
        $this->articulo = $articulo;
        $this->proveedorArticulo = $proveedorArticulo;
        $this->cantidad = $cantidad;
        $this->usuario = $usuario;
        $this->marca = $marca;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Solicitar Pedido Articulo',
        );
    }


    public function content()
    {
        return new Content(
            view: 'parciales.inventario.articulo.pdf-pedido',
        );
    }

    public function attachments()
    {
        return [];
    }
}
