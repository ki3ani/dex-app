<?php

namespace App\Models;

//including other classes
//we use [use]
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//classic inheritance
class User extends Authenticatable 
{
    //?? (why another one?)
    use Notifiable;

    /**
     * The database table associated with this model class
     * @var string
     */
    protected $table = "User";
    protected $primaryKey = "user_id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'national_id','name', 'email', 'password',
        'phone','dob','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * A user has one role
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(){
        return $this->belongsTo('Role');
    }

    /**
     * A User has many produce records
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produce(){
        return $this->hasMany('App\Production','user_id','user_id');
    }

}