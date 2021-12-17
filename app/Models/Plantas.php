<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    use HasFactory;

    protected $fillable = ['popular','cientifico','quantidade','user_id'];

    public function dono(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
