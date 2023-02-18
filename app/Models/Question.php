<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'question';
    protected $primaryKey = 'id';
    protected $fillable = ['category', 'question', 'correct_answer','incorrect_answer_1',
    'incorrect_answer_2','incorrect_answer_3','status'];
}
