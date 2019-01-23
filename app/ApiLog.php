<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $fillable = ['ip_address', 'request_uri', 'request_response', 'allowed'];
}
