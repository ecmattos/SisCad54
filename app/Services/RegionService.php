<?php

namespace SisCad\Services;

use SisCad\Repositories\RegionRepository;

class RegionService
{
	protected $repository;

	public function __construct(RegionRepository $repository)
	{
		$this->repository = $repository;
	}

	public function store(array $data)
	{
		#$data['code'] = strtoupper($data['code']);
       	#$data['description'] = strtoupper($data['description']);

		#return $this->repository->store($data);
	}

	public function update(array $data, $id)
	{
		#$data['code'] = strtoupper($data['code']);
       	#$data['description'] = strtoupper($data['description']);

       	#return $this->repository->update($data, $id);
	}
}