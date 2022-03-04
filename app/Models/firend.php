<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firend extends Model
{
    use HasFactory;

    protected $fillable =['firend_name','firend_age','adress','is_approved'];
}
