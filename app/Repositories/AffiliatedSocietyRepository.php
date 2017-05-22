<?php

namespace SisCad\Repositories;

use SisCad\AffiliatedSociety;
use SisCad\Entities\Patrimonial;

class AffiliatedSocietyRepository
{
	
	private $affiliated_society;
	private $patrimonial;

	public function __construct(AffiliatedSociety $affiliated_society, Patrimonial $patrimonial)
	{
		$this->affiliated_society = $affiliated_society;
		$this->patrimonial = $patrimonial;
	}

	public function allAffiliatedSocieties()
	{
		return $this->affiliated_society
			->orderBy('description', 'asc')
			->get();
	}

	public function allPatrimonialsByAffiliatedSocietyId($id)
    {
        return $this->patrimonial
        	->whereAffiliatedSocietyId($id)
        	->get();
    }

    public function findAffiliatedSocietyById($id)
    {
        return $this->affiliated_society->find($id);
    }

    public function storeAffiliatedSociety($input)
    {
        $affiliated_society = $this->affiliated_society->fill($input);
        $affiliated_society->save();
    }
}