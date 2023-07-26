<x-app-layout>
    <div class="m-5">
        <div class="tabs">
            <a class="tab tab-bordered ">Buku Saya</a> 
            <a class="tab tab-bordered tab-active">Menunggu</a> 
            <a class="tab tab-bordered">Dikembalikan</a>
        </div>
        <div>
            @foreach ($datas as $data)
            {{-- {{ $data->buku->judul }} --}}
                <x-card.buku :judul="$data->buku->judul" 
                    :id="$data->buku->id"
                    :sinopsis="$data->buku->sinopsis" 
                    />
            @endforeach
        </div>
    </div>
</x-app-layout>