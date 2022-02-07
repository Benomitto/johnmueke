<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;
	protected $table = 'engagements';
	protected $fillable = ['shoutout_title','name','email','phone','description'];
}
