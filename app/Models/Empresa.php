<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactor;
    public $table='empresas';
    protected $fillable = array('*');
    
    public function clientes(){
        return $this->belongsToMany(Cliente::class,'__cliente__empresa');
    }
}