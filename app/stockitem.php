<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItem extends Model
{
    protected $table = 'StockItem';

    public const CREATED_AT = 'DateTimeCreated';
    public const UPDATED_AT = 'DateTimeUpdated';

    protected $primaryKey = 'ItemID';
}
