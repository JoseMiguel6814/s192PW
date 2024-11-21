<!-- Modal para editar cada cliente -->
<div class="modal fade" id="ModalEditar{{ $cliente->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $cliente->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $cliente->id }}">{{ __('Editar Cliente') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para editar cliente -->
                <form id="editForm{{ $cliente->id }}" action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT') 

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                        <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="{{ $cliente->nombre }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtnombre')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                        <input type="text" class="form-control" name="txtapellido" id="txtapellido" value="{{ $cliente->apellido }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtapellido')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                        <input type="email" class="form-control" name="txtcorreo" id="txtcorreo" value="{{ $cliente->correo }}">
                        <small class="fst-italic text-danger">{{$errors->first('txtcorreo')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('Teléfono:') }}</label>
                        <input type="number" class="form-control" name="numbertelefono" id="numbertelefono" value="{{ $cliente->telefono }}">
                        <small class="fst-italic text-danger">{{$errors->first('numbertelefono')}}</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cerrar') }}</button>
                <button 
                    type="submit" 
                    form="editForm{{ $cliente->id }}" 
                    class="btn btn-success" 
                    onclick="return confirm('¿Estás seguro de que deseas guardar los cambios?');">
                    {{ __('Confirmar Cambios') }}
                </button>
            </div>
        </div>
    </div>
</div>
