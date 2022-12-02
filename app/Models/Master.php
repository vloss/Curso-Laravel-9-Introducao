<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $primaryKey = 'id_master';

    use HasFactory;
    
    public function hasMasterDetail(){ // Possui detalhes
        
        //return $this->hasMany(MasterDetail::class);

        // Caso não seja no padrão do laravel
        return $this->hasMany(MasterDetail::class, 'id_master', 'id_master');

    }
}
