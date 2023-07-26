<x-app-layout>
    <div class="m-5">
        <div class="tabs">
            <a class="tab tab-bordered tab-active">Buku Saya</a> 
            <a href="{{ route('buku-pending') }}" class="tab tab-bordered ">Menunggu</a> 
            <a class="tab tab-bordered">Dikembalikan</a>
        </div>
        <div>
            @foreach ($bukus as $buku)
                <x-card.buku :judul="$buku->judul" />
            @endforeach
        </div>
    </div>
</x-app-layout>