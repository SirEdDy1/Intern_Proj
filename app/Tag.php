<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    public $primaryKey = 'id';
    public $timestamps = true;
    public function post(){
        return $this->belongsTo(Post::class, 'id', 'tag_id');
    }
}
