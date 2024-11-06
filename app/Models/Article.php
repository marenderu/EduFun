<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table ='articles';
    protected $fillable = ['writer_id','category','title','content', 'image_link'];
    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id');
    }
}
