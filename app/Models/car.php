<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    public $table="car";
    protected $fillable=[
        "name",
        "lon"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

    public function not(){
        return $this->hasOne(sar::class,'car_id');
    }
   
}