<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public $timestamps=false;
}
