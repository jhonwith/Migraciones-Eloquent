<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='eventos';
    protected $fillable = 
        [
            'nombre',
            'numero_ticker',
        ];



    public function clientes()
    {
        return $this->belongsToMany(cliente::class);
    }
}
