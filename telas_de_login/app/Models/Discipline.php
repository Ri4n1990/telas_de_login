<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Student;
use App\Models\Teatcher;


class Discipline extends Model{

    use HasUuids;

    protected $table = 'discipline';
    protected $keyType = 'string';
    protected $primaryKey = 'cod_discipline';

    public function student():BelongsToMany{

        return $this->belongsToMany(Student::class,'frequents','id_discipline','id_student','cod_discipline','id');

    }

    public function teatcher():BelongsToMany{

        return $this->belongsToMany(Teatcher::class,'teatches','id_discipline','id_teatcher','cod_discipline','id');

    }
    




}