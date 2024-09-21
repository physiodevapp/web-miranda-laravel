<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ContactStatus extends Model
{
    use HasFactory;

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'status_id');
    }

    public function getDefaultStatus()
    {
        return self::where('name', '')->first()->id;
    }
}
