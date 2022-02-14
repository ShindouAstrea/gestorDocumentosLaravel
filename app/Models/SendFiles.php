<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendFiles extends Model
{
    use HasFactory;
    protected $table = 'documents';

    protected $primaryKey='id_document';
    public $timestamps = false ;
    protected $fillable=[
        'nombre'=>'Mi nombre',
        //'fecha',
        'correo'=>"micorre@mail.cl",
        'nombreDocumento'
    ];
    
}
