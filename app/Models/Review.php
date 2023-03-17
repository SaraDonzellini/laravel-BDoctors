<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'text',
        'vote',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
