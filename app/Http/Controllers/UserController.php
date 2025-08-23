<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
{
    $users = User::query()
        ->when($request->input('name'), function($query, $search) {
            return $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%'.$search.'%')
                  ->orWhere('email', 'like', '%'.$search.'%');
            });
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

    return view('pages.users.index', compact('users'));
}


    public function store(Request $request){

        // dd($request->all());

        try {

         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('profile', $filename, 'public');
        $data['image'] = $filename;
        }

        User::create($data);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(User $user)
{

    return view('pages.users.show', compact('user'));
}


    public function edit(User $user){

        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        // dd($request->all());
    try {
        $data = $request->only([
            'name', 'email', 'address', 'phone', 'status', 'image'
        ]);

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->storeAs('profile', $filename, 'public');
            $data['image'] = $filename;
        }

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    } catch (\Throwable $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}


    public function destroy(User $user){

         // hapus image kalau ada
    if ($user->image && Storage::exists('public/profile/' . $user->image)) {
        Storage::delete('public/profile/' . $user->image);
    }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }

}
