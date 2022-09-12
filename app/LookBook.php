<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookBook extends Model
{
    public function paragraphs()
    {
        return $this->hasMany(LookBookInsideParagraph::class);
    }

    public function inside_images()
    {
        return $this->hasMany(LookBookInside::class);
    }
}
