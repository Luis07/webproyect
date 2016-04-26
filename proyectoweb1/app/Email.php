<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  protected $fillable = [
        'email','destino', 'asunto', 'contenido','enviado','borrador','salida',
    ];
}
