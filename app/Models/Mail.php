<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    protected $filliable = [
        "emailAddress",
        "message"
    ];

    static $rules = [
		'emailAddress' => 'required',
		'message' => 'required',
    ];
}
