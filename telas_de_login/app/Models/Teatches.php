<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Teatches extends Pivot{

    use HasUuids;
    use HasFactory;

    protected $table = 'teatches';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    public function uniqueIds()
    {
        return ['id'];
    }








}