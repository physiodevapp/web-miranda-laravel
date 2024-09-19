<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_id',
        'first_name',
        'last_name',
        'email',
        'photo',
        'phone',
        'subject',
        'message',
        'datetime',
    ];

    public function status()
    {
        return $this->belongsTo(ContactStatus::class, 'status_id');
    }
}
