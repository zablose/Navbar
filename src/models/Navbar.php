<?php

namespace App\Zablose\Navbar;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{

    public $table = 'zablose_navbars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pid',
        'filter',
        'type',
        'body',
        'title',
        'href',
        'class',
        'icon',
        'role_id',
        'permission_id',
        'position'
    ];

}
