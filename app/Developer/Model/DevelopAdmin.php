<?php

namespace Developer\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

    /**
     * The database table developAdmin by the model.
     *
     * @var string
     */
class DevelopAdmin extends Authenticatable
{
    protected $table = 'developAdmin';

    /**
     * No use created_at, updated_at
     *
     * @var
     */
    public $timestamps = false;

    protected $fillable = [
        'id',
        'account',
        'password',
        'status',
        'login_time'
    ];
}
