<?php

namespace App;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NieuwVoertuig extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use HasFactory;

    public const SOORT_VOERTUIG_SELECT = [
        [
            'label' => '20 m3',
            'value' => '20',
        ],
        [
            'label' => '40 m3',
            'value' => '40',
        ],
        [
            'label' => '57 m3',
            'value' => '57',
        ],
    ];

    public $table = 'nieuw_voertuigs';

    protected $appends = [
        'soort_voertuig_label',
    ];

    protected $orderable = [
        'id',
        'kenteken',
        'datum_aanschaf',
        'soort_voertuig',
    ];

    protected $filterable = [
        'id',
        'kenteken',
        'datum_aanschaf',
        'soort_voertuig',
    ];

    protected $dates = [
        'datum_aanschaf',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'kenteken',
        'datum_aanschaf',
        'soort_voertuig',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getDatumAanschafAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function setDatumAanschafAttribute($value)
    {
        $this->attributes['datum_aanschaf'] = $value ? Carbon::createFromFormat(config('project.datetime_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getSoortVoertuigLabelAttribute()
    {
        return collect(static::SOORT_VOERTUIG_SELECT)->firstWhere('value', $this->soort_voertuig)['label'] ?? '';
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
