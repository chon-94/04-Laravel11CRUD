<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class Users extends Controller
{
    
    public function index()
    {
        return view('modules/users/index');
    }

    public function create()
    {
        return view('modules/users/create');
    }

    public function store(Request $request)
    {
        $item = new User(); 
        $item->name = $request -> name;
        $item->save();
        return to_route('index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
