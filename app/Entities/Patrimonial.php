<?php

namespace SisCad\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\Revisionable;
use Carbon\Carbon;
use DB;

class Patrimonial extends Revisionable
{
    use SoftDeletes;
    protected $dates = [
        'patrimonial_status_date',
        'purchase_date',
        'deleted_at'
    ];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 9999999; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.
    protected $revisionCreationsEnabled = true;
    protected $dontKeepRevisionOf = [
        'description'
    ];
    #protected $revisionFormattedFields = array('title'  => 'string:<strong>%s</strong>', 'public' => 'boolean:No|Yes', 'deleted_at' => 'isEmpty:Active|Deleted');
    protected $revisionFormattedFieldNames = [
    	'code' => 'Código',
    	'patrimonial_type_id' => 'Tipo',
    	'patrimonial_sub_type_id' => 'Sub-tipo',
    	'patrimonial_brand_id' => 'Marca',
    	'patrimonial_model_id' => 'Modelo',
    	'patrimonial_status_id' => 'Situação',
    	'patrimonial_status_date' => 'Data Situação',
    	'provider_id' => 'Fornecedor',
    	'management_unit_id' => 'Unid.Gestora',
    	'patrimonial_sector_id' => 'Setor',
    	'patrimonial_sub_sector_id' => 'Sub-setor',
    	'serial' => 'Nr serial',
    	'purchase_date' => 'Data da compra',
    	'purchase_process' => 'Processo de compra',
        'purchase_value' => 'Valor da compra',
    	'invoice' => 'Nota Fiscal',
    	'useful_life_years' => 'Vida útil (anos)',
    	'comments' => 'Observações', 
        'deleted_at' => 'Excluído'
    ];
    protected $revisionNullString = 'nada';
    protected $revisionUnknownString = 'desconhecido';

    public function identifiableCode() 
    {
        return $this->code;
    }

    protected $fillable = [
    	'code',
    	'description',
    	'patrimonial_type_id',
    	'patrimonial_sub_type_id',
    	'patrimonial_brand_id',
    	'patrimonial_model_id',
    	'patrimonial_status_id',
    	'patrimonial_status_date',
    	'provider_id',
    	'management_unit_id',
    	'patrimonial_sector_id',
    	'patrimonial_sub_sector_id',
    	'serial',
    	'purchase_date',
    	'purchase_process',
        'purchase_value',
    	'invoice',
    	'useful_life_years',
    	'comments'
    ];

    
    public function setPurchaseDateAttribute($value)
    {
        return $this->attributes['purchase_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function patrimonial_type()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialType'); 
    }

    public function patrimonial_sub_type()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialSubType'); 
    }

    public function patrimonial_brand()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialBrand'); 
    }

    public function patrimonial_model()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialModel'); 
    }

    public function patrimonial_status()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialStatus'); 
    }

    public function provider()
    {
        return $this->belongsTo('SisCad\Entities\Provider'); 
    }

    public function affiliated_society()
    {
        return $this->belongsTo('SisCad\Entities\AffiliatedSociety'); 
    }

    public function management_unit()
    {
        return $this->belongsTo('SisCad\Entities\ManagementUnit'); 
    }

    public function patrimonial_sector()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialSector'); 
    }

    public function patrimonial_sub_sector()
    {
        return $this->belongsTo('SisCad\Entities\PatrimonialSubSector'); 
    }

    public function patrimonial_movements()
    {
        return $this->hasMany('SisCad\Entities\PatrimonialMovement'); 
    }
}