<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primarykey = 'id';
    protected $fillable = ['post_id','username','comment'];
    public function Posts(){
        return $this->belongsTo(Posts::class);
    }
}
