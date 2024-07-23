<?php

namespace App\Domain\Base\Aggregate;

use Illuminate\Database\Eloquent\Model;

interface Aggregate
{
    public function getRoot(): Model;
}
