<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Team extends Model
{
    use HasFactory;


    public function hasUsers(){
        
        return $this->belongsToMany(User::class);

        // Caso não seja no padrão do laravel
        //return $this->belongsToMany(User::class, 'table' 'foreignPivoKey', 'relatedPivolKey');

    }
}
