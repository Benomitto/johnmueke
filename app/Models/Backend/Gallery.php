<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'galleries';
	protected $guarded = [];
    use HasFactory;
}
