<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    //
    use HasFactory; 

    protected $fillable = ["tite","body"];
    function user (){
        return $this ->belongsTo(user::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d M, Y h:i A');
    } 

}


   