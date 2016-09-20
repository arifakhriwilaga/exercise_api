<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Employee;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;


class EmployeesController extends Controller
{

      //API for show all record
    public function index()
    {
     return Employee::all();     
    }

      //API for create new record employee

     public function store(Request $request)
     {
        $add = new Employee();
        $add->name = $request->input('name');
        $add->address = $request->input('address');
        $add->save(); 
        return Employee::all();
     }

      //API for show record employee
   
    public function show($id)
    {
        return Employee::findOrFail($id);
    }

      //API for update record employee
      public function update(Request $request, $id)
    {
        $add = Employee::findOrFail($id);
        $add->name = $request->get('name', null);
        $add->address = $request->get('address', null);
        $add->save(); 
        return Employee::all();
    }


      //API for delete record employee
    public function destroy($id)
    {
        $employes = Employee::findOrFail($id);
        $employes->delete();
        return Employee::all();
    }

}
   