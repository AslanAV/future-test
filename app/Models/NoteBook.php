<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteBook extends Model
{
    use HasFactory;

    protected $fillable = [
        "family_name_first_name_patronymic",
        "phone",
        "email",
        "birthday",
        "photo"
    ];
}
