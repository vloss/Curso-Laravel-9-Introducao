<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_master_detail';
}
