<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    use HasFactory;

    protected $table = 'tips';
    protected $fillable = 
    [
        'title',
        'image',
        'context'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
