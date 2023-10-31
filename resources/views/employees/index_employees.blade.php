@extends ('layouts.base')

@section ('contenido')

    <h1>LISTA DE EMPLEADOS</h1>
    <button>AGREGAR</button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Título</th>
                <th>Fecha de Nacimiento</th>
                <th>Fecha de contratación</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Región</th>
                <th>País</th>
                <th>Teléfono</th>
                <th>Informar a</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->EmployeeID }}</td>
                    <td>{{ $employee->FirstName }}</td>
                    <td>{{ $employee->LastName }}</td>
                    <td>{{ $employee->Title }}</td>
                    <td>{{ $employee->BirthDate }}</td>
                    <td>{{ $employee->HireDate }}</td>
                    <td>{{ $employee->Address }}</td>
                    <td>{{ $employee->City }}</td>
                    <td>{{ $employee->Region }}</td>
                    <td>{{ $employee->Country }}</td>
                    <td>{{ $employee->HomePhone }}</td>
                    <td>{{ $employee->ReportsTo }}</td>
                    <td>
                        <form action="{{ route('empleados.destroy', $employee->EmployeeID)}}" method="POST">
                        <a class="btn btn-info" href="/empleados/{{ $employee->EmployeeID }}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" >Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop