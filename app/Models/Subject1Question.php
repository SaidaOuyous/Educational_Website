<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject1Answer;

// Subject1Question.php
class Subject1Question extends Model
{
  
    protected $fillable = ['question_text'];

    // Subject1Question.php
public function answers()
{
    return $this->hasMany(Subject1Answer::class, 'question_id');
}

}


