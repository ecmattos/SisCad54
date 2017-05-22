<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\RegionRepository;

use Session;

class RegionsController extends Controller
{
    private $regionRepository;

    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = $this->regionRepository->allRegions();
        #dd($regions);
        return view('regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\RegionRequest $request)
    {
        $data = $request->all();

        $data['code'] = strtoupper($data['code']);
        $data['description'] = strtoupper($data['description']);

        $this->regionRepository->store($data);

        Session::flash('flash_message_success', 'Registro incluido com sucesso !');

        return redirect('regions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \SisCad\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = $this->regionRepository->findRegionById($id);
        $logs = $region->revisionHistory;
        
        return view('regions.show', compact('region', 'logs'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SisCad\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = $this->regionRepository->findRegionById($id);
      
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SisCad\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\RegionRequest $request, $id)
    {
        $data = $request->all();

        $data['code'] = strtoupper($data['code']);
        $data['description'] = strtoupper($data['description']);

        $region = $this->regionRepository->findRegionById($id);
        $region->update($data);

        return redirect('regions')->with('flash_message_success', 'Registro alterado com sucesso !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SisCad\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        return $this->regionRepository->delete($region);
    }
}
