<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function paragraphs()
    {
        return $this->hasMany(ServiceInsideParagraph::class);
    }

    public function inside_images()
    {
        return $this->hasMany(ServiceInside::class);
    }
}
