<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Frequents extends Pivot{
    use HasFactory;
    use HasUuids;

    protected $table = 'frequents';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function uniqueIds()
    {
        return ['id'];
    }






}