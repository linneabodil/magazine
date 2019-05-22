<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'ingress', 'text'];
}
