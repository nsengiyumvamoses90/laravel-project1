<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        
    ];
    public function likes(){
        return $this->hasMany('App\models\movement', 'movement_id')->sum('like');
    }
    public function dislike(){
        return $this->hasMany('App\models\movement', 'movement_id')->sum('dislike');
    }
}
