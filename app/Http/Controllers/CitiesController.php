<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\RegionRepository;
use SisCad\Repositories\StateRepository;
use SisCad\Repositories\CityRepository;

use SisCad\Repositories\PartnerRepository;
use SisCad\Repositories\MemberRepository;

class CitiesController extends Controller
{
    private $cityRepository;

    public function __construct(CityRepository $cityRepository, PartnerRepository $partnerRepository, MemberRepository $memberRepository)
    {
        $this->cityRepository = $cityRepository;
        $this->partnerRepository = $partnerRepository;
        $this->memberRepository = $memberRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
       $cities = $this->cityRepository->allCities();
       ##dd($cities);

       return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(StateRepository $stateRepository, RegionRepository $regionRepository)
    { 
        $states = array(''=>'') + $stateRepository
            ->allStates()
            ->pluck('description', 'id')
            ->all();

        $regions = array(''=>'') + $regionRepository
            ->allRegions()
            ->pluck('description', 'id')
            ->all();

        return view('cities.create', compact('states', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\CityRequest $request)
    {
        $input = $request->all();

        $input['description'] = strtoupper($input['description']);

        $city = $this->cityRepository->storeCity($input);
      
        return redirect('cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $city = $this->cityRepository->findCityById($id);
        $logs = $city->revisionHistory;
        
        return view('cities.show', compact('city', 'logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, StateRepository $stateRepository, RegionRepository $regionRepository)
    {
        $states = $stateRepository
            ->allStates()
            ->pluck('description', 'id')
            ->all();

        $regions = $regionRepository
            ->allRegions()
            ->pluck('description', 'id')
            ->all();

        $city = $this->cityRepository->findCityById($id);
        
        return view('cities.edit', compact('city', 'states', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\CityRequest $request, $id)
    {
        $input = $request->all();

        $input['description'] = strtoupper($input['description']);
                
        $city = $this->cityRepository->findCityById($id);
        $city->update($input);

        return redirect('cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, PartnerRepository $partnerRepository)
    {
        if($this->partnerRepository->findPartnersByCityId($id)->count()>0)
        {
           #return view('errors.destroy_denied');
           return redirect('cities')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) Parceiro(s) vinculada(s) ao registro selecionado !']); 
        }

        if($this->memberRepository->findMembersByCityId($id)->count()>0)
        {
           #return view('errors.destroy_denied');
           return redirect('CitiesController')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) Associados(s) vinculada(s) ao registro selecionado !']); 
        }

        $this->cityRepository->findCityById($id)->delete();

        return redirect('cities');
    }

    public function state($id)
    {
        $cities = $this->cityRepository->findCitiesByStateId($id);
        
        return response()->json($cities);
    }
}