<div class="marcas-productos border border-1">
    <div class="d-flex justify-content-between">
        @foreach($subcategorias as $subcategory )
            <a href="#"><img src="{{ $subcategory->avatar_url }}" style="width: 100%;" alt=""></a>
        @endforeach
    </div>
</div>
