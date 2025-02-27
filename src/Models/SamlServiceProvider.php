<?php

namespace UnsaDev\SamlIdp\Models;

use Illuminate\Database\Eloquent\Model;

class SamlServiceProvider extends Model
{
    protected $table = 'samlidp_service_providers';

    public $incrementing = false;

    protected $keyType = 'string';
}
