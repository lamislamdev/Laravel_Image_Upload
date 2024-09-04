<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCatagory extends Model
{
    use HasFactory;

    protected $fillable = [
        "catagory_name"
    ];
    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
