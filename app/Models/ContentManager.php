<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentManager extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = "content_manager";
    protected $fillable = [
        'type',
        'placeholder_name',
        'Placeholder_value',
    ];  
}
