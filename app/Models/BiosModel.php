<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BiosModel extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'bios';

    protected $fillable = [
        'id', 'name','birth', 'death', 'contribs', 'award'
    ];
}