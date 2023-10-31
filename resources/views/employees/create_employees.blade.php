@extends ('layouts.base')

@section ('contenido')
    
<h2>INSERTAR EMPLEADO</h2>
<form action="/empleados" method="POST">
    @csrf
    
    <div class= "mb-3">
        <label for="" class="form-label">NOMBRE</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="2">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">APELLIDO</label>
        <input type="text" id="apellido" name="apellido" class="form-control" tabindex="3">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Título</label>
        <input type="number" id="edad" name="edad" class="form-control" tabindex="4">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Fecha de Nacimiento</label>
        <input type="text" id="correo" name="correo" class="form-control" tabindex="5">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Fecha de contratación	</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Dirección</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Ciudad</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Región</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">País</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <div class= "mb-3">
        <label for="" class="form-label">Informar a</label>
        <input type="text" id="id" name="id" class="form-control" tabindex="1">
    </div>
    <a href="/alumnos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex=5>Guardar</button>
</form>
@stop