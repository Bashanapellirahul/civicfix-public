<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
     protected $fillable = ['title', 'description', 'location','successfull_msg', 'priority'];
}
