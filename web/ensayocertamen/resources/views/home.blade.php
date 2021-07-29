@extends("layouts.master")
@section("contenido")
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <span>Agregar negocio</span>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="patente-txt" class="form-label">Patente</label>
                    <input type="text" class="form-control" id="patente-txt">
                </div>
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre</label>
                    <input type="text" id="nombre-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="direccion-txt" class="form-label">Direccion</label>
                    <input type="text"class="form-control" id="direccion-txt"> 
                </div>
                <div class="mb-3">
                    <label for="numero-txt" class="form-label">Numero de contacto</label>
                    <input type="number" class="form-control" id="numero-txt">
                </div>

            </div>
            <div class="card-footer d-grid gap-1">
                <button id="registrar-btn" class="btn btn-info">Registrar</button>
            </div>
        </div>
    </div>    
</div>    
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/negociosService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>

@endsection