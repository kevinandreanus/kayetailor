<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FabricCatalogue extends Model
{
    public function paragraphs()
    {
        return $this->hasMany(FabricInsideParagraph::class);
    }

    public function inside_images()
    {
        return $this->hasMany(FabricInside::class);
    }
}
