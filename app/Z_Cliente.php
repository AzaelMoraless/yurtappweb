<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Z_Cliente extends Model
{
    protected $table='z_clientes';

    protected $primarykey = 'id';

    public $timestamps = false;

    protected $fillable = ['id','nombre','ap','am','direccion','telefono',
        'celular','rfc'];


}
