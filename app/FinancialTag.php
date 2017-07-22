<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialTag extends Model
{
    protected $connection = 'sqlsrv2';
    
    protected $table = 'dimensionfinancialtag';
}
