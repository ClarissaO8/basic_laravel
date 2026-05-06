<x-layout>
    <form action ="/fakultas" method="POST">
        @csrf
        <div class="form-group">
            <input
            nama="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            >
        </div>
        <div class="form-group">
            <input
            nama="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            >
        </div>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
</x-layout>