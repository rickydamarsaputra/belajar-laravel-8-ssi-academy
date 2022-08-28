<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::paginate(10);

        return view('pages.dashboard.toy.index', compact('toys'));
    }

    public function createView()
    {
        return view('pages.dashboard.toy.create');
    }

    public function createAction(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'desc' => 'required'
        ]);

        Toy::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'desc' => $request->desc
        ]);

        return redirect()->route('toy.index');
    }

    public function delete($id)
    {
        $toy = Toy::find($id);
        $toy->delete();

        return redirect()->back();
    }
}
