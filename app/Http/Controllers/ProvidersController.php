<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\ProviderRepository;
use SisCad\Repositories\CityRepository;

class ProvidersController extends Controller
{
    private $providerRepository;
    private $cityRepository;

    public function __construct(ProviderRepository $providerRepository, CityRepository $cityRepository)
    {
        $this->providerRepository = $providerRepository;
        $this->cityRepository = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $providers = $this->providerRepository->allProviders();
        #dd($providers);
        return view('providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(CityRepository $cityRepository)
    {
        $cities = array(''=>'') + $cityRepository
            ->allCities()
            ->pluck('description', 'id')
            ->all();
        
        return view('providers.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ProviderRequest $request)
    {
        $input = $request->all();

        $input['description'] = strtoupper($input['description']);
        $input['address'] = strtoupper($input['address']);
        $input['neighborhood'] = strtoupper($input['neighborhood']);
        $input['comments'] = strtoupper($input['comments']);

        $provider = $this->providerRepository->storeProvider($input);

        return redirect('providers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $provider = $this->providerRepository->findProviderById($id);
        $logs = $provider->revisionHistory;

        return view('providers.show', compact('provider', 'logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, CityRepository $cityRepository)
    {
        $cities = $cityRepository
            ->allCities()
            ->pluck('description', 'id')
            ->all();

        $provider = $this->providerRepository->findProviderById($id);
        
        return view('providers.edit', compact('provider', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\ProviderRequest $request, $id)
    {
        $input = $request->all();

        $input['description'] = strtoupper($input['description']);
        $input['address'] = strtoupper($input['address']);
        $input['neighborhood'] = strtoupper($input['neighborhood']);
        $input['comments'] = strtoupper($input['comments']);

        $provider = $this->providerRepository->findProviderById($id);
        $provider->update($input);

        return redirect('providers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($this->memberRepository->findMembersByProviderId($id)->count()>0)
        {
           return redirect('providers')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) Associado(s) vinculado(s) ao registro selecionado !']); 
        }

        $this->providerRepository->findProviderById($id)->delete();

        return redirect('providers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function restore($id)
    {
        $this->providerRepository->withTrashed()->findProviderById($id)->restore();

        return redirect('providers');
    }
}
