<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'adult_count',
        'child_count',
        'check_in',
        'check_out',
        'purpose',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'check_in'  => 'datetime',
        'check_out' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
