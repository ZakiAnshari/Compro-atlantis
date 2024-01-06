<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $fillable = [
        'nama','slug','image','created_at','updated_at'
    ];

    public function sluggable(): array
    {
        return[
            'slug'=> [
                'source'=>'nama'
            ]
        ];
    }
}
