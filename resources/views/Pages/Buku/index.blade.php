<x-app-layout>
    <div class="m-5">
        {{-- <h1>{{ Auth::user()->role }}</h1> --}}
        

        <div class=" grid lg:grid-cols-3 gap-5">
            @foreach ($bukus as $buku)
            <x-card.buku :judul="$buku->judul" 
                :id="$buku->id"
                {{-- :pengarang="$buku->pengarang"
                :penerbit="$buku->penerbit"
                :genre="$buku->genre"
                :status="$buku->status"
                :tahun="$buku->tahun_terbit" --}}
                :sinopsis="$buku->sinopsis"
                {{-- :cover="$buku->cover"
                :jumlah="$buku->jumlah" --}}
                />
            @endforeach
        </div>
    </div>


    {{-- <div class="bg-pink-600 h-40 w-40">
        p
    </div>
    <div class="bg-orange-700 h-40 w-40">
        p
    </div>
    <div class="bg-yellow-300 h-40 w-40">
        p
    </div> --}}


</x-app-layout>