<x-app-layout>
    <div class="m-5">
        <div class="tabs">
            <a class="tab tab-bordered tab-active">Buku Saya</a> 
            <a href="{{ route('buku-pending') }}" class="tab tab-bordered ">Menunggu</a> 
            <a class="tab tab-bordered">Dikembalikan</a>
        </div>
        <div>
            @foreach ($datas as $data)
                <x-card.buku :judul="$data->buku->judul" 
                    :id="$data->buku->id"
                    :sinopsis="$data->buku->sinopsis" 
                    />
            @endforeach
        </div>
    </div>
</x-app-layout>