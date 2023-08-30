<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table = 'clientes';
    protected $fillable = 
        [
            'nombre',
            'apellido',
            'telefono',
        ];


    public function eventos()
    {
        return $this->belongsToMany(evento::class);
    }
}
