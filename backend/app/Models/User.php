<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'age',
        'city',
        'email',
        'github',
        'instagram',
        'summary'
    ];

    public function Frameworks(){
        return $this->hasMany(Frameworks::class);
    }

    public function Hobbies(){
        return $this->hasMany(Hobbies::class);
    }
}
