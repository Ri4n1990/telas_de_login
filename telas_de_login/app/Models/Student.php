<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Discipline;



class Student extends Model{

    use HasUuids;

    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $keyType = 'string';


    public function discipline():BelongsToMany{

        return $this->belongsToMany(Discipline::class,'frequents','id_student','id_discipline','id','cod_discipline');

    }










}