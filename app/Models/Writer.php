<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $table = "writers";
    protected $fillable = ["writer_profile_picture_link","writer_name","description"] ;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
