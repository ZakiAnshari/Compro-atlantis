<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrestasiAkademik extends Model
{
    use HasFactory;
    use Sluggable;


    protected $fillable = [
        'nama','slug','bidang','prestasi','Tingkat','Tahun',
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
