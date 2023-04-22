<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = 
    [
        'institution',
        'designation',
        'duration',
        'responsibilities'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
