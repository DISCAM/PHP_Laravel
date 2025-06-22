<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InternalEvent extends Model
{
    const CREATED_AT = 'CreationDateTime';
    const UPDATED_AT = 'EditDateTime';
    protected $table = 'internalevents';
    protected $primaryKey = 'id';

}
