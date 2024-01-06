<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrestasiNonAkademik extends Model
{
    use HasFactory;
    use Sluggable;


    protected $fillable = [
        'nama','slug','bidang','prestasi','tingkat','tahun',
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
