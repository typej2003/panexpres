<?php

namespace App\Http\Livewire\Pagomovil;

use Illuminate\Http\Request;
use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Pagomovil;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ListPagomovil extends AdminComponent
{

	public $state = [];

	public $pago;

	public $showEditModal = false;

	public $pagoIdBeingRemoved = null;

	public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

	public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

	public function changeStatus(Pagomovil $pago, $status)
	{
		Validator::make(['status' => $status], [
			'status' => [
				'required',
				Rule::in(Pagomovil::CONFIRMADO, Pagomovil::NOCONFIRMADO, Pagomovil::RECHAZADO),
			],
		])->validate();

		$pago->update(['status' => $status]);

		$this->dispatchBrowserEvent('updated', ['message' => "El Estado cambió a {$status} satisfactoriamente."]);
	}

	public function addNew()
	{
		$this->reset();

		$this->showEditModal = false;

		$this->dispatchBrowserEvent('show-form');
	}

	public function createPago()
	{
		$validatedData = Validator::make($this->state, [
			'referencia' => 'required',
            'telefono' => 'required',
            'banco' => 'required',
            'monto' => 'required',
            'status' => 'required',
		])->validate();

		Pagomovil::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Pago móvil agregado satisfactoriamente!']);
	}

	public function edit(Pagomovil $pago)
	{
		$this->reset();

		$this->showEditModal = true;

		$this->pago = $pago;

		$this->state = $pago->toArray();

		$this->dispatchBrowserEvent('show-form');
	}

	public function updatePago()
	{
		$validatedData = Validator::make($this->state, [
			'referencia' => 'required',
            'telefono' => 'required',
            'banco' => 'required',
            'monto' => 'required',
            'status' => 'required',
		])->validate();

		$this->pago->update($validatedData);

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Pago móvil actualizado satisfactoriamente!']);
	}

	public function confirmPagoRemoval($pagoId)
	{
		$this->pagoIdBeingRemoved = $pagoId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deletePago()
	{
		$pago = Pagomovil::findOrFail($this->pagoIdBeingRemoved);

		$pago->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Pago móvil eliminado satisfactoriamente!']);
	}

    public function capturarPagomovil(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'referencia' => 'required',
            'banco' => 'required|not_in:0',
            'codigo' => 'required|not_in:0',
            'telefono' => 'required',
            'monto' => 'required',
        ]);

        $data = [
            'referencia' => $request->post('referencia'), 
            'banco' => $request->post('banco'), 
            'codigo' => $request->post('codigo'), 
            'telefono' => $request->post('telefono'), 
            'monto' => $request->post('monto'), 
            'status' => 'noconfirmado', 
        ];

        if ($validator->fails()) {
            return response()->json([
                'data' => $data,
                'responseMessage' => 'Operación fallida',
				'success' => false
            ]); // 422
        }
        
        $success = true;

        $pago = Pagomovil::create($data);

        return response()->json([
                'data' => $data,
                'responseMessage' => 'Operación exitosa',
				'success' => $success
            ], 200);
    }

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {

    	$pagomoviles = Pagomovil::query()
    		->where('referencia', 'like', '%'.$this->searchTerm.'%')
    		->orWhere('telefono', 'like', '%'.$this->searchTerm.'%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(15);

        return view('livewire.pagomovil.list-pagomovil', [
        	'pagomoviles' => $pagomoviles,
        ]);
    }

	
}
