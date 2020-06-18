<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contatos';
    public $timestamps = false;
    protected $fillable = ['nome', 'email', 'telefone', 'endereco'];

}
