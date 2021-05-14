<?php

namespace App;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmCustomer extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use HasFactory;

    public $table = 'crm_customers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $orderable = [
        'id',
        'status.name',
        'company_name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'website',
        'description',
    ];

    protected $filterable = [
        'id',
        'status.name',
        'company_name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'website',
        'description',
    ];

    protected $fillable = [
        'status_id',
        'company_name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'website',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function status()
    {
        return $this->belongsTo(CrmStatus::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
