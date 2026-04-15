<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


use App\Models\Discipline;



class Teatcher extends Authenticatable{

    use HasFactory;
    use HasUuids;

    protected $table = 'teatcher';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = ['created_at', 'updated_at','remember_token'];
    protected $hidden = ['created_at', 'updated_at','id','remember_token','password'];

    public function uniqueIds()
    {
        return ['id'];
    }



    public function disciplines():BelongsToMany{

        return $this->belongsToMany(Discipline::class,'teatches','id_teatcher','id_discipline','id','cod_discipline');

    }


    









}