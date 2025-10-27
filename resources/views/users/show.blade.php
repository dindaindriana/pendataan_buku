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
            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id }}">
                Delete
            </button>
        </div>



        {{-- Modal delete --}}
        <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p> Apakah kamu yakin ingin menghapus data <strong>{{ $user->name }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <!-- Form Delete -->
                        <form action="/users/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End modal deelte --}}

    </div>
</x-app-layout>
