<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class questions_9 extends Model
{
    use HasFactory;
    protected $table = "questions_9";
    public $timestamps = false;
    protected $fillable = [
        'standard','subject', 'chapter', 'question', 'answer', 'otherimage'
    ];
}