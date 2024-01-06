<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StrukturOrganisasi extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $fillable = [
        'nama','jabatan','slug', 'image','instagram','twitter','facebook',
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
