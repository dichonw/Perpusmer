<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'databuku';
    protected $fillable = ['Title', 'Author','Publisher','Category','Year','AllowingToLoan','DaysToLoan','Status','Type','Copy','Condition'];
}
