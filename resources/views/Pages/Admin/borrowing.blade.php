<x-app-layout>
    <div class="p-5 grid grid-flow-row gap-5">
        <div class="tabs tabs-boxed">
            <a class="tab ">Pending</a> 
            <a class="tab tab-active">Meminjam</a> 
            <a class="tab">Mengembalikan</a>
        </div>

        
        @foreach ($datas as $data)
            <x-card.stat 
            :judul="$data->buku->judul"
            :waktu="$data->created_at->diffForHumans()"
            :nama="$data->user->name"
            :username="$data->user->username"
            :jumlah="$data->jumlah"
            :status="$data->status"
                
                />
        </div>
        @endforeach
    </div>
</x-app-layout>