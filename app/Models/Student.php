<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{

    protected $fillable = ['name'];

    public $additional_attributes = ['card'];

    public function getCardAttribute(): string
    {
        $res = '';
        foreach ($this->cards as $card) {
            $res .= $card->book->title;
        }
        return $res;
    }


    public function cards(): HasMany
    {
        return $this->hasMany(StudentCard::class);
    }
}
