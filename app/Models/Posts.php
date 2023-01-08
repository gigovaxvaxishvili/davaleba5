<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primarykey = 'id';
    protected $fillable = ['name','desc'];
    public function postComments(){
        return $this->hasMany(Comments::class);
    }
}
