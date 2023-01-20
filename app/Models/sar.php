<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sar extends Model
{
    use HasFactory;
    public $table="sar";
    protected $fillable=[
        "sar",
        "car_id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
    
}