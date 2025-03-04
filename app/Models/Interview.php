<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'chef_id', 
        'interview_excerpt', 
        'start_story', 
        'michelin_experience', 
        'previous_work',
    ];

    /**
     * Get the chef that owns the interview.
     */
    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }
}
