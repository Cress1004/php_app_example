<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    // protected $table = 'posts';
    // public $primary_key = 'id';
    // public $created_at = 'false';
    public function user() {
        return $this->belongsTo(User::class);
    }

}
