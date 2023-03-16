<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bio',
        'curriculum',
        'photo',
        'address',
        'phone',
        'performances',
        'visibility'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
