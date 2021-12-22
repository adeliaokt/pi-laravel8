<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Groups;


class CobaController extends Controller
{

    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->paginate(6);

        return view('friends.index', compact('friends'));
    }
    public function create()
    {
        return view('friends.create');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $friends = new Friends;

        $friends->groups_id = $request->groups_id;
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;

        $friends->save();

        return redirect('/');
    }
    public function show($id)
    {
        $friends = Friends::where('id', $id)->first();
        return view('friends.show', ['friend' => $friends]);
    }

    public function edit($id)
    {
        $friends = Friends::where('id', $id)->first();
        return view('friends.edit', ['friend' => $friends]);
    }
    public function detail($groups_id)
    {
        // $friends = Friends::where('groups_id', $groups_id);
        // return view('friends.detail', compact('friends'));
        $groups =  Groups::where('id', $groups_id)->first();
        // var_dump($groups);
        // die();
        $friends = Friends::where('groups_id', $groups_id)->get();
        return view('friends.detail', ['friend' => $friends,'group'=>$groups]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        Friends::find($id)->update([
            'groups_id' => $request->groups_id,
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        Friends::find($id)->delete();
        return redirect('/');
    }
}