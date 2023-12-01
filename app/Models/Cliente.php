<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactor;
    public $table='clientes';
    protected $fillable = array('*');
    
    public function empresas(){
        return $this->belongsToMany(Empresa::class,'__cliente__empresa');

    } 
}
