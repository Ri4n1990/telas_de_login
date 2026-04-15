<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;
use App\Policies\StudentPolicy;

use App\Models\Discipline;


#[UsePolicy(StudentPolicy::class)]
class Student extends Authenticatable{

    use HasFactory;
    use HasUuids;

    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = ['created_at', 'updated_at','remember_token'];
    protected $hidden = ['created_at', 'updated_at','id','remember_token','password'];


    


    public function disciplines():BelongsToMany{

        return $this->belongsToMany(Discipline::class,'frequents','id_student','id_discipline','id','cod_discipline');

    }










}