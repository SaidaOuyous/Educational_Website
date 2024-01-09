<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // Course.php (Model)
protected $fillable = ['title', 'description', 'pdf'];

}
