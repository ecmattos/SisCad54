<?php

namespace SisCad\Repositories;

use SisCad\Entities\Patrimonial;

use Prettus\Repository\Eloquent\BaseRepository;

class PatrimonialRepositoryEloquent extends BaseRepository implements PatrimonialRepository
{
    public function model()
    {
        return Patrimonial::class;
    }

	private $patrimonial;

	public function __construct(Patrimonial $patrimonial)
	{
		$this->patrimonial = $patrimonial;
	}

	public function allPatrimonials()
	{
		return $this->patrimonial
			->orderBy('description', 'asc')
			->get();
	}

    public function allPatrimonialsById()
    {
        return $this->patrimonial
            ->orderBy('id', 'asc')
            ->get();
    }

	public function findPatrimonialById($id)
    {
        return $this->patrimonial->find($id);
    }

    public function storePatrimonial($input)
    {
        $patrimonial = $this->patrimonial->fill($input);
        $patrimonial->save();
    }

    public function searchPatrimonials()
    {
        session(['srch_patrimonial_code'                    => $input['srch_patrimonial_code']]);
        session(['srch_patrimonial_serial'                  => $input['srch_patrimonial_serial']]);
        session(['srch_patrimonial_type_id'                 => $input['srch_patrimonial_type_id']]);
        session(['srch_patrimonial_sub_type_id'             => $input['srch_patrimonial_sub_type_id']]);
        session(['srch_patrimonial_brand_id'                => $input['srch_patrimonial_brand_id']]);
        session(['srch_patrimonial_model_id'                => $input['srch_patrimonial_model_id']]);
        session(['srch_patrimonial_provider_id'             => $input['srch_patrimonial_provider_id']]);
        session(['srch_patrimonial_affiliated_society_id'   => $input['srch_patrimonial_affiliated_society_id']]);
        session(['srch_patrimonial_sector_id'               => $input['srch_patrimonial_sector_id']]);
        session(['srch_patrimonial_sub_sector_id'           => $input['srch_patrimonial_sub_sector_id']]);
        session(['srch_patrimonial_state_id'                => $input['srch_patrimonial_state_id']]);


        $srch_patrimonial_code                  = session()->has('srch_patrimonial_code') ? session()->get('srch_patrimonial_code') : null;
        $srch_patrimonial_serial                = session()->has('srch_patrimonial_serial') ? session()->get('srch_patrimonial_serial') : null;
        $srch_patrimonial_type_id               = session()->has('srch_patrimonial_type_id') ? session()->get('srch_patrimonial_type_id') : null;
        $srch_patrimonial_sub_type_id           = session()->has('srch_patrimonial_sub_type_id') ? session()->get('srch_patrimonial_sub_type_id') : null;
        $srch_patrimonial_brand_id              = session()->has('srch_patrimonial_brand_id') ? session()->get('srch_patrimonial_brand_id') : null;
        $srch_patrimonial_model_id              = session()->has('srch_patrimonial_model_id') ? session()->get('srch_patrimonial_model_id') : null;
        $srch_patrimonial_provider_id           = session()->has('srch_patrimonial_provider_id') ? session()->get('srch_patrimonial_provider_id') : null;
        $srch_patrimonial_affiliated_society_id = session()->has('srch_patrimonial_affiliated_society_id') ? session()->get('srch_patrimonial_affiliated_society_id') : null;
        $srch_patrimonial_sector_id             = session()->has('srch_patrimonial_sector_id') ? session()->get('srch_patrimonial_sector_id') : null;
        $srch_patrimonial_sub_sector_id         = session()->has('srch_patrimonial_sub_sector_id') ? session()->get('srch_patrimonial_sub_sector_id') : null;
        $srch_patrimonial_state_id              = session()->has('srch_patrimonial_state_id') ? session()->get('srch_patrimonial_state_id') : null;

        return $this->patrimonial
            ->select(
                'patrimonials.*',
                'patrimonial_types.code AS patrimonial_type_code',
                'patrimonial_types.description AS patrimonial_type_description',
                'patrimonial_sub_types.code AS patrimonial_sub_type_code',
                'patrimonial_sub_types.description AS patrimonial_sub_type_description',
                'patrimonial_brands.code AS patrimonial_brand_code',
                'patrimonial_brands.description AS patrimonial_brand_description',
                'patrimonial_models.code AS patrimonial_model_code',
                'patrimonial_models.description AS patrimonial_model_description',
                'providers.description AS provider_description',
                'affiliated_societies.code AS affiliated_society_code',
                'affiliated_societies.description AS affiliated_society_description',
                'patrimonial_sectors.code AS patrimonial_sector_code',
                'patrimonial_sectors.description AS patrimonial_sector_description',
                'patrimonial_sub_sectors.code AS patrimonial_sub_sector_code',
                'patrimonial_sub_sectors.description AS patrimonial_sub_sector_description',
                'patrimonial_statuses.code AS patrimonial_status_code')
            ->join('patrimonial_types','patrimonials.patrimonial_type_id','=','patrimonial_types.id')
            ->join('patrimonial_sub_types','patrimonials.patrimonial_sub_type_id','=','patrimonial_sub_types.id')
            ->join('patrimonial_brands','patrimonials.patrimonial_brand_id','=','patrimonial_brands.id')
            ->join('patrimonial_models','patrimonials.patrimonial_model_id','=','patrimonial_models.id')
            ->join('providers','patrimonials.provider_id','=','providers.id')
            ->join('affiliated_societies','patrimonials.affiliated_society_id','=','affiliated_societies.id')
            ->join('patrimonial_sectors','patrimonials.patrimonial_sector_id','=','patrimonial_sectors.id')
            ->join('patrimonial_sub_sectors','patrimonials.patrimonial_sub_sector_id','=','patrimonial_sub_sectors.id')
            ->join('patrimonial_statuses','patrimonials.patrimonial_status_id','=','patrimonial_statuses.id')
            
            ->where(function($query) use ($srch_patrimonial_code, $srch_patrimonial_serial, $srch_patrimonial_type_id, $srch_patrimonial_sub_type_id, $srch_patrimonial_brand_id, $srch_patrimonial_model_id, $srch_patrimonial_provider_id, $srch_patrimonial_affiliated_society_id, $srch_patrimonial_sector_id, $srch_patrimonial_sub_sector_id, $srch_patrimonial_state_id) 
            {
                if($srch_patrimonial_code)
                {
                    $srch_patrimonial_code_terms = explode(" ",$srch_patrimonial_code);

                    $srch_patrimonial_code_terms_total = count($srch_patrimonial_code_terms);

                    for($i=0 ; $i < $srch_patrimonial_code_terms_total ; $i++ )
                    {
                        $query->where('code','LIKE','%'.$srch_patrimonial_code_terms[$i].'%');
                    }
                }


                if($srch_patrimonial_serial)
                {
                    $srch_patrimonial_serial_terms = explode(" ",$srch_patrimonial_serial);

                    $srch_patrimonial_serial_terms_total = count($srch_patrimonial_serial_terms);

                    for($i=0 ; $i < $srch_patrimonial_serial_terms_total ; $i++ )
                    {
                        $query->where('serial','LIKE','%'.$srch_patrimonial_serial_terms[$i].'%');
                    }
                }

                if($srch_patrimonial_type_id)
                {
                    $query->wherePatrimonialTypeId($srch_patrimonial_type_id);
                } 

                if($srch_patrimonial_sub_type_id)
                {
                    $query->wherePatrimonialSubTypeId($srch_patrimonial_sub_type_id);
                }

                if($srch_patrimonial_brand_id)
                {
                    $query->wherePatrimonialBrandId($srch_patrimonial_brand_id);
                }

                if($srch_patrimonial_model_id)
                {
                    $query->wherePatrimonialModelId($srch_patrimonial_model_id);
                }

                if($srch_patrimonial_provider_id)
                {
                    $query->whereProviderId($srch_patrimonial_provider_id);
                }

                if($srch_patrimonial_affiliated_society_id)
                {
                    $query->whereAffiliatedSocietyId($srch_patrimonial_affiliated_society_id);
                }

                if($srch_patrimonial_sector_id)
                {
                    $query->wherePatrimonialSectorId($srch_patrimonial_sector_id);
                }

                if($srch_patrimonial_sub_sector_id)
                {
                    $query->wherePatrimonialSubSectorId($srch_patrimonial_sub_sector_id);
                }
            })
            ->orderBy('description', 'asc')
            ->get();
    }
}