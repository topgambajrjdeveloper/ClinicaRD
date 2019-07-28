<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    // Relaciones
    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    // Almacenamiento
    public function store($request)
    {
        $slug = str_slug($request->name, '-');
        return self::create($request-> all() + [
            'slug' => $slug,
        ]);
    }


    // Validaciones

    // Recuperación información

    //  Otras operaciones
}
