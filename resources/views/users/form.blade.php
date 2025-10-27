<x-app-layout title="{{ $page_meta['title'] }}">

    <x-slot name="header">
        <h4>{{ $page_meta['title'] }}</h4>
    </x-slot>

    

    <form method="POST" action="{{ $page_meta['url'] }}">
        @csrf
        @method($page_meta['method'])
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $user->name) }}">
            @error('name')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email', $user->email) }}">
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

        <button type="submit" class="btn btn-success">{{ $page_meta['submit_text'] }}</button>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
    </form>

</x-app-layout>
    