<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frameworks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'level'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public $timestamps=false;
}
