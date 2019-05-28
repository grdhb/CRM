<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $primaryKey='id';
    protected $table='register';
    protected $guarded = ['repwd'];
}
