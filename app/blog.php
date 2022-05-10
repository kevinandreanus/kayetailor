<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public function contents()
    {
        return $this->hasMany(BlogContent::class);
    }
}
