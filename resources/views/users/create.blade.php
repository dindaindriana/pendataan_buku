<x-app-layout title="Home">

    <x-slot name="header">
        <h4>{{ 'Tambah User' }}</h4>
    </x-slot>

    {{-- @dump($errors) <!-- Untuk menampilkan error validasi --> --}}

    <form method="POST" action="/users">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
            @error('name')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            @error('email')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
    </form>

</x-app-layout>
    