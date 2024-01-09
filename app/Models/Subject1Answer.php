<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject1Question;

// Subject1Answer.php
class Subject1Answer extends Model
{
    

    protected $fillable = ['question_id', 'answer_text', 'is_correct'];

   // Subject1Answer.php
public function question()
{
    return $this->belongsTo(Subject1Question::class, 'question_id');
}

}
