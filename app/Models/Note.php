<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id'];

    /**
     * Get the user that owns the note
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
