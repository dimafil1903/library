<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherCard extends Model
{
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function library_staff(): BelongsTo
    {
        return $this->belongsTo(LibraryStaff::class);
    }
}
