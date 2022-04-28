<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    protected $fillable =[
        'name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];
    
}
