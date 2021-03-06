<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use SisCad\Http\Requests;
use SisCad\Http\Controllers\Controller;
use SisCad\Repositories\MaterialUnitRepository;
use SisCad\Repositories\MaterialRepository;

class MaterialUnitsController extends Controller
{
    private $material_unitRepository;
    private $materialRepository;

    public function __construct(MaterialUnitRepository $material_unitRepository, MaterialRepository $materialRepository)
    {
        $this->material_unitRepository = $material_unitRepository;
        $this->materialRepository = $materialRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_units = $this->material_unitRepository->allMaterialUnits();
        #dd($material_units);
        return view('material_units.index', compact('material_units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialUnitRequest $request)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);
        $input['description'] = strtoupper($input['description']);

        $material_unit = $this->material_unitRepository->storeMaterialUnit($input);

        return redirect('material_units');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $material_unit = $this->material_unitRepository->findMaterialUnitById($id);
        $logs = $material_unit->revisionHistory;

        return view('material_units.show', compact('material_unit', 'logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $material_unit = $this->material_unitRepository->findMaterialUnitById($id);
        
        return view('material_units.edit', compact('material_unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialUnitRequest $request, $id)
    {
        $input = $request->all();

        $input['code'] = strtoupper($input['code']);
        $input['description'] = strtoupper($input['description']);

        $material_unit = $this->material_unitRepository->findMaterialUnitById($id);
        $material_unit->update($input);

        return redirect('material_units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if($this->materialRepository->allMaterialsByMaterialUnitId($id)->count()>0)
        {
           return redirect('material_units')->withInput()->withErrors(['error' => '<b>Exclusão CANCELADA</b> >> Existe(m) unidade(s) vinculado(s) ao registro selecionado !']); 
        }

        $this->material_unitRepository->findMaterialUnitById($id)->delete();

        return redirect('material_units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function restore($id)
    {
        $this->material_unitRepository->withTrashed()->findMaterialUnitById($id)->restore();

        return redirect('material_units');
    }
}
