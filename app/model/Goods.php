<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
	protected $table = 'goods';
    protected $primaryKey = 'g_id';
    protected $guarded = [];
}
