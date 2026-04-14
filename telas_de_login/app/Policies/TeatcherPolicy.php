<?php

namespace App\Policies;

use App\Models\Teatcher;


class TeatcherPolicy{

    public function  read_discipline(Teatcher $authteatcher , Teatcher $teatcher){

        return $authteatcher->id === $teatcher->id;

    }
}