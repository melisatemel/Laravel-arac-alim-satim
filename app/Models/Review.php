<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'arac_id',
        'user_id',
        'IP',
        'subject',
        'review',
    ];
    public function arac()
    {
        return $this->belongsTo(Arac::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
