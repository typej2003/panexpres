<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Promocion;
use App\Models\Comercio;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

class ListPromociones extends AdminComponent
{
	use WithFileUploads;

	public $state = [];
	public $comercio;
	public $comercio_id = 0;
	public $product_id = 0;
	public $bannerRightUp;
	public $bannerRightDown;
    public $product;
    public $comercios = [], $products = [];

	protected $rules = [
        'comercio' => 'required|not_in:0',
        'product' => 'required|not_in:0',
		'bannerRightUp' => 'required|image|max:1024',
		'bannerRightDown' => 'required|image|max:1024',
    ];
	public $promocion;
	public $showEditModal = false;
	public $promocionIdBeingRemoved = null;
	public $searchTerm = null;
    protected $queryString = ['searchTerm' => ['except' => '']];
    public $sortColumnName = 'created_at';
    public $sortDirection = 'asc';
    public $photo;

	public function updatedComercio($value)
	{
		$this->comercio_id = $value;
		if($value !== '0')
		{
			if(Comercio::find($value)->name == 'PanExpres'){
				$product = 0;
			
			}
			$this->products = Product::where('comercio_id', $value)->get();
			$this->product = $this->products->first()->id ?? null;
		}
		
	}

    public function mount()
    {
		
		$banner1 = Promocion::where('bannerside', 2)->where('order', 1)->first();
		
		if($banner1 !== null)
		{
			$this->bannerRightUp = $banner1;
		}else{
			$searchKeys = [
				'bannerside' => 2, // Fila Derecha
				'order' => 1,       // Banner Superior
			];
			$this->bannerRightUp = Promocion::updateOrCreate(
				$searchKeys, 
				['avatar' => '']
			);
		}
		
		$banner2 = Promocion::where('bannerside', 2)->where('order', 2)->first();
		if($banner2 !== null)
		{
			$this->bannerRightDown = $banner2;
		}else{
			$searchKeys = [
				'bannerside' => 2, // Fila Derecha
				'order' => 2,       // Banner Superior
			];
			$this->bannerRightDown = Promocion::updateOrCreate(
				$searchKeys, 
				['avatar' => '']
			);
		}
		
    }

    public function addNew()
	{
		$bannerRightUp = $this->bannerRightUp;
		$bannerRightDown = $this->bannerRightDown;
		$this->reset();
		$this->bannerRightUp = $bannerRightUp;
		$this->bannerRightDown = $bannerRightDown;

		$this->comercios = Comercio::all();

		$this->products = collect();
        
		$this->showEditModal = false;

        $this->state['active'] = 'active';
		
		$this->dispatchBrowserEvent('show-formPromocion');
	}

	public function createPromocion()
	{
		
		$validatedData = Validator::make($this->state, [
			'title' => 'required',
			'order' => 'required',
			'active' => 'required',
		])->validate();

		if ($this->photo) {
			// 1. Obtener el nombre original del archivo
			$originalName = $this->photo->getClientOriginalName();
			
			// 2. Usar storeAs para definir el nombre manualmente
			// El primer parámetro es la carpeta ('/'), el segundo el nombre, el tercero el disco.
			$validatedData['avatar'] = $this->photo->storeAs('/', $originalName, 'avatarspromociones');
		}

		$validatedData['comercio_id'] = $this->comercio;
		$validatedData['product_id'] = $this->product;

		Promocion::create($validatedData);

		$this->dispatchBrowserEvent('hide-formPromocion', ['message' => 'Promoción agregada satisfactoriamente!']);
	}

	public function edit(Promocion $promocion)
	{
		
		$bannerRightUp = $this->bannerRightUp;
		$bannerRightDown = $this->bannerRightDown;
		$this->reset();
		$this->bannerRightUp = $bannerRightUp;
		$this->bannerRightDown = $bannerRightDown;
		
		$this->showEditModal = true;

		$this->promocion = $promocion;

		$this->state = $promocion->toArray();

		$this->comercios = Comercio::all();
        $this->comercio = $this->state['comercio_id'];        
        $this->product = $this->state['product_id'];

		$this->products = Product::where('comercio_id', $this->comercio)->get();
		

		$this->dispatchBrowserEvent('show-formPromocion');
	}

	public function updatePromocion()
	{
		
		$validatedData = Validator::make($this->state, [
			'title' => 'required',
			'order' => 'required',
            'active' => 'required',
		])->validate();

		
        if ($this->photo) {
			$validatedData['avatar'] = $this->photo->store('/', 'avatarspromociones');            
		}

		$validatedData['comercio_id'] = $this->comercio;
		$validatedData['product_id'] = $this->product;

		$this->promocion->update($validatedData);

		$this->dispatchBrowserEvent('hide-formPromocion', ['message' => 'Promocion actualizada satisfactoriamente!']);
	}

	public function confirmPromocionRemoval($promocionId)
	{
		$this->promocionIdBeingRemoved = $promocionId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deletePromocion()
	{
		// 1. Encontrar el registro antes de borrarlo para obtener la ruta del archivo
		$promocion = Promocion::findOrFail($this->promocionIdBeingRemoved);
		$diskName = 'avatarspromociones';

		// 2. Verificar si existe la ruta del archivo y eliminarlo del disco
		if (!empty($promocion->avatar) && Storage::disk($diskName)->exists($promocion->avatar)) {
			Storage::disk($diskName)->delete($promocion->avatar);
		}

		// 3. Eliminar el registro de la base de datos
		$promocion->delete();

		// 4. Notificar al navegador
		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Promocion y su imagen han sido eliminadas satisfactoriamente!']);
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

	public function updatedBannerRightUp()
    {       
		
		$searchKeys = [
            'bannerside' => 2, // Fila Derecha
            'order' => 1,       // Banner Superior
        ];
        $diskName = 'avatarspromociones';
		
        $this->validate([
			'bannerRightUp' => 'required|image',
		], [
			'bannerRightUp.required' => 'Debes seleccionar una imagen.',
			'bannerRightUp.image' => 'El archivo debe ser una imagen (jpg, png, etc).',
			'bannerRightUp.max' => 'La imagen no debe pesar más de 1MB.',
		]);


        // 2. Encontrar el registro actual para obtener la ruta previa (si existe)
        $banner1 = Promocion::where($searchKeys)->first();
        $previousPath = $banner1 ? $banner1->avatar : null;
        
        // 3. Obtener el archivo subido
        $uploadedFile = $this->bannerRightUp;

        // 4. Obtener el nombre original del archivo
        $originalName = $uploadedFile->getClientOriginalName();

        // 5. Almacenar la nueva imagen usando su nombre original (storeAs)
        $path = $uploadedFile->storeAs('/', $originalName, $diskName);

        // 6. Crear o Actualizar el registro en la base de datos
        // Usa updateOrCreate para garantizar que solo exista un registro con 'bannerside=2' y 'order=1'
		
		
        // 7. Eliminar la imagen anterior del disco (si existe y no es la nueva)
        if (!empty($previousPath) && $previousPath !== $path && Storage::disk($diskName)->exists($previousPath)) {
            Storage::disk($diskName)->delete($previousPath);
        }

		

		$banner1->update(['avatar' => $path]);

		

		$this->bannerRightUp = $banner1;
        
        // 10. Disparar el evento de navegador
        $this->dispatchBrowserEvent('updated', ['message' => 'Imagen cambiada satisfactoriamente!']);

		
    }

	public function updatedBannerRightDown()
    {       
		$searchKeys = [
            'bannerside' => 2, // Fila Derecha
            'order' => 2,       // Banner Superior
        ];
        $diskName = 'avatarspromociones';

        // 1. Validar el archivo subido
        
		$this->validate([
			'bannerRightDown' => 'required|image',
		], [
			'bannerRightDown.required' => 'Debes seleccionar una imagen.',
			'bannerRightDown.image' => 'El archivo debe ser una imagen (jpg, png, etc).',
			'bannerRightDown.max' => 'La imagen no debe pesar más de 1MB.',
		]);

        // 2. Encontrar el registro actual para obtener la ruta previa (si existe)
        $banner1 = Promocion::where($searchKeys)->first();
        $previousPath = $banner1 ? $banner1->avatar : null;
        
        // 3. Obtener el archivo subido
        $uploadedFile = $this->bannerRightDown;

        // 4. Obtener el nombre original del archivo
        $originalName = $uploadedFile->getClientOriginalName();

        // 5. Almacenar la nueva imagen usando su nombre original (storeAs)
        $path = $uploadedFile->storeAs('/', $originalName, $diskName);

        // 6. Crear o Actualizar el registro en la base de datos
        // Usa updateOrCreate para garantizar que solo exista un registro con 'bannerside=2' y 'order=1'
		

        // 7. Eliminar la imagen anterior del disco (si existe y no es la nueva)
        if (!empty($previousPath) && $previousPath !== $path && Storage::disk($diskName)->exists($previousPath)) {
            Storage::disk($diskName)->delete($previousPath);
        }

		$banner1->update(['avatar' => $path]);

		$this->bannerRightDown = $banner1;
        
        // 10. Disparar el evento de navegador
        $this->dispatchBrowserEvent('updated', ['message' => 'Imagen cambiada satisfactoriamente!']);
    }

    public function render()
    {
    	$promociones = Promocion::query()
			->where('bannerside', 1)
    		->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(15);

        return view('livewire.afiliado.list-promociones', [
        	'promociones' => $promociones,
        ]);
    }
}
