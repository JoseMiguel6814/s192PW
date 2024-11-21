@extends('layouts.plantilla1')

@section('titulo','Clientes registrados')

@section('contenido')    

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
    @foreach ($consultaclientes as $cliente )
    <div class="card text-justify font-monospace">
        <div class="card-header fs-5 text-primary">
            {{ $cliente->nombre }} {{ $cliente->apellido }}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{ $cliente->correo }}</h5>
            <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
        </div>
        <div class="card-footer text-muted">
            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEditar{{ $cliente->id }}">
                {{ __('Actualizar') }}
            </button>
            
            <!-- Botón de eliminación  -->
            <form id="deleteForm{{ $cliente->id }}" action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->id }})">
                    {{ __('Eliminar') }}
                </button>
            </form>
        </div>

        @include('ModalEditar', ['cliente' => $cliente])
    </div>
    @endforeach

   
    <script>
        function confirmDelete(clienteId) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario si se confirma
                    document.getElementById(`deleteForm${clienteId}`).submit();
                }
            });
        }
    </script>
</div>
{{-- Finaliza tarjetaCliente --}}
@endsection
