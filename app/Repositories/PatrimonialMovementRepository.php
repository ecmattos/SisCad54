<?php

namespace SisCad\Repositories;

use SisCad\Entities\PatrimonialMovement;

class PatrimonialMovementRepository
{
	
	private $patrimonial_movement;

	public function __construct(PatrimonialMovement $patrimonial_movement)
	{
		$this->patrimonial_movement = $patrimonial_movement;
	}

	public function allPatrimonialMovements()
	{
		return $this->patrimonial_movement
			->orderBy('description', 'asc')
			->get();
	}

	public function findPatrimonialMovementById($id)
    {
        return $this->patrimonial_movement->find($id);
    }

    public function allPatrimonialMovementsByPatrimonialId($id)
    {
        return $this->patrimonial_movement
			->wherePatrimonialId($id)
			->orderBy('patrimonial_status_date', 'DESC')
			->get();
    }

    public function lastPatrimonialMovementDateByPatrimonialId($id)
    {
        return $this->patrimonial_movement
			->wherePatrimonialId($id)
			->orderBy('patrimonial_status_date', 'DESC')
			->take(1)
			->get();
    }

    public function storePatrimonialMovement($input)
    {
        $patrimonial_movement = $this->patrimonial_movement->fill($input);
        $patrimonial_movement->save();
    }
}