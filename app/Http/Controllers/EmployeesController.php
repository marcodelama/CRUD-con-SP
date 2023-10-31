<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = DB::select('CALL sp_obtener_empleado');
        return view('employees.index_employees')->with('employees', $employees);
    }

    public function create()
    {
        return view('employees.create_employees');
    }

    public function destroy($EmployeeID)
    {
        $employee = DB::statement('CALL sp_eliminar_empleado (?)', [$EmployeeID]);
        return redirect('/empleados')->with('success', 'Empleado eliminado con éxito');
    }

    public function edit($EmployeeID)
    {
        $employee = DB::select('CALL sp_obtener_empleadoxid (?)', [$EmployeeID])[0];
        return view('employees.edit_employees')->with('employee', $employee);
    }

    
}
