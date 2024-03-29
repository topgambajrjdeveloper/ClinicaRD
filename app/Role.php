<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alert;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
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
        alert()->success('Éxito', 'El rol se ha guardado')->persistent('Cerrar');
        return self::create($request-> all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name, '-');
        self::updated($request->all() + [
            'slug' => $slug
        ]);
        alert()->success('Éxito', 'El rol se ha actualizado')->persistent('Cerrar');
    }


    // Validaciones

    // Recuperación información

    //  Otras operaciones
}
