<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use Sluggable;
    protected $dates = ['created_at'];
    
    protected $fillable = [
        'id','nama','slug','jeniskelamin','agama','namasekolahasal','noteleponsiswa','emailsiswa','jenjangpendidikan','namawali','noteleponortu','created_at','updated_at'
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
