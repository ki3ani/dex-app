<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $table = "Production";
    protected $primaryKey = "production_id";
    protected $fillable = ['cow_id','production_date','amount','user_id'];
}
