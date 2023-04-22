<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $fillable = 
    [
        'institution',
        'major',
        'year',
        'grading_point',
        'remark'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
