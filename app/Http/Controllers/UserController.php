<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->latest()->get();
        return view('users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' =>'Tambah user',
                'method' => 'POST',
                'url' => '/users',
                'submit_text' => 'Tambah User',
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' =>'Update user',
                'method' => 'PUT',
                'url' => '/users/' . $user->id,
                'submit_text' => 'Update User',
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return to_route('users.index');
    }

    // public function requestValidated(): array
    // {
    //     return[
    //         'name' => ['required', 'min:3', 'max:255'],
    //         'email' => ['required', 'email'],
    //         'password' => ['required', 'min:8'],
    //     ];
    // } //bisa buat seperti ini untuk request pada form dan lebih baik jika dibuat seperti UserRequest.php

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return to_route('users.index');
    }
}
