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
        'performance',
        'visibility'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specializations() {
        return $this->belongsToMany(Specialization::class);
    }
}