<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramUnggulan extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $fillable = [
        'name','slug','image'
    ];

    public function sluggable(): array
    {
        return[
            'slug'=> [
                'source'=>'name'
            ]
        ];
    }
}
