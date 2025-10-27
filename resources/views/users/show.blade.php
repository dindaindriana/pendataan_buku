<x-app-layout title="Home">

    <x-slot name="header">
        <h4>{{ 'Detail User' }}</h4>
    </x-slot>

    <div class="card">
        <div class="card-header">
            Detail User
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ $user->email }}</p>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </div>
</x-app-layout>
