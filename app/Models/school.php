<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;
    public $table="school";
    protected $fillable=[
        "school_name"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

    public function student(){
        return $this->hasMany(students::class,'school_id');
    }
}