<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greating extends Model
{

    protected $fillable = ['word', 'sender', 'receptor', 'picture'];
}
