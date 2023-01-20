<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    public $table="students";
    protected $fillable=[
        "name",
        "school_id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}