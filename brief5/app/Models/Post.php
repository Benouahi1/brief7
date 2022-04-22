<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'author',
        'body',
        'cover',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'post_id',
    ];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
