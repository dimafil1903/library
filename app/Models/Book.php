<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $fillable = ['title', 'date_of_creation'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }


    public function edition(): BelongsTo
    {
        return $this->belongsTo(Edition::class);
    }
}
