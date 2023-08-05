<x-app-layout>
    {{-- {{ $data }} --}}

    <div class="m-5">
        <p><b>Judul : </b>{{ $data->judul }}</p>
        <p><b>Sinopsis : </b>{{ $data->sinopsis }}</p>
        <p><b>pengarang : </b>{{ $data->pengarang }}</p>
        <p>{{ $data->penerbit }}</p>
        <p>{{ $data->jumlah }}</p>
    </div>
</x-app-layout>