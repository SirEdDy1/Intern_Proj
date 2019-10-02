<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    public $primaryKey = 'id';
    public $timestamps = true;
}
