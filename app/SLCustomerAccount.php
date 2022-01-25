<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SLCustomerAccount extends Model
{
    protected $table = 'SLCustomerAccount';

    public const CREATED_AT = 'DateTimeCreated';
    public const UPDATED_AT = 'DateTimeUpdated';

    protected $primaryKey = 'SLCustomerAccountID';
}
