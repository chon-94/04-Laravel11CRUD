<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class Users extends Controller
{
    
    public function index()
    {
        $items = User::paginate(2);
        return view('modules/users/index',compact('items'));
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
        $item = User::find($id);
        return view('modules/users/show', compact('item'));
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
