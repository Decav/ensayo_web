@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped">
                <thead class="bg-info">
                    <tr>
                        <td>Patente</td>
                        <td>Nombre</td>
                        <td>Direccion</td>
                        <td>Numero de contacto</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-negocio">

                </tbody>
            </table>

        </div>
    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/negociosService.js')}}"></script>
    <script src="{{asset('js/ver_negocio.js')}}"></script>
@endsection