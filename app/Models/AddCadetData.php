<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCadetData extends Model
{
    protected $table = 'add_cadet_data'; // Specify the table name
    
    protected $fillable = ['name', 'department','classNo','year']; // Fillable attributes
}
