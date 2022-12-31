<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'word_id', 'answer', 'correct',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The word that this answer belongs to.
     */
    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function counters()
    {
        return $this->hasMany(Counter::class);
    }

    /**
     * The answers that belong to the user.
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
