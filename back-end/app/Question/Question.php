<?php

namespace App\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'settings'];

    protected $casts = [
        'settings' => 'json', // Cast the 'settings' field to JSON when retrieving/storing data
    ];

    protected $hidden = ['created_at', 'updated_at'];

}
