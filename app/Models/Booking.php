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
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'adult_count',
        'child_count',
        'check_in',
        'check_out',
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
