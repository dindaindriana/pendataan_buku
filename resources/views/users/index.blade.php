<x-app-layout title="Users">

    <x-slot name="header">
        <h4>{{ 'Users' }}</h4>
    </x-slot>

    <div class="justify-content-end mb-3 d-flex">
        <a href="/users/create" class="btn btn-primary">Tambah User</a>
    </div>

    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="/users/{{ $user->id }}">view</a>
                                <a href="/users/{{ $user->id }}/edit">edit</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
