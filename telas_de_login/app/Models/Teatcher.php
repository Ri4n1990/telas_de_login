<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Discipline;


class Teatcher extends Model{

    use HasUuids;

    protected $table = 'teatcher';
    protected $primaryKey = 'id';
    protected $keyType = 'string';


    public function discipline():BelongsToMany{

        return $this->belongsToMany(Discipline::class,'teatches','id_teatcher','id_discipline','id','cod_discipline');

    }


    









}