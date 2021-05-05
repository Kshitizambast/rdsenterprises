<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

     protected $fillable = [
        'slider_images'
    ];
  
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setFilenamesAttribute($value)
    {
        $this->attributes['slider_images'] = json_encode($value);
    }
}
