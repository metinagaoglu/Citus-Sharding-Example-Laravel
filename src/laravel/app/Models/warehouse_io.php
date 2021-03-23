<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouse_io extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'type',
        'amount',
        'tenant_id',
        'warehouse_id',
        'tenantid',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
