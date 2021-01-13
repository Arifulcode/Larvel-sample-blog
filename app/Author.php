<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','email','about'];
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
