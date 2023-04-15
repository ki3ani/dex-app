<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    use HasFactory;
    protected $table = "Cow";
    protected $primaryKey = "tag";
    protected $fillable =["tag",'name','dob','gender','breed'];



}
