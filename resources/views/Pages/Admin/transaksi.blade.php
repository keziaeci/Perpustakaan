<x-app-layout>
    <div class="tabs tabs-boxed">
        <form action="{{ route('transaksi') }}">
            @csrf
            <button name="status" value="Pending" class="tab {{ request('status') === 'Pending' ? 'tab-active' : '' }} ">Menunggu</button> 
        </form>
        
        <form action="{{ route('transaksi') }}">
            @csrf
            <button name="status" value="Borrow" class="tab">Meminjam</button> 
        </form>
        <a class="tab">Mengembalikan</a>
    </div>

    <div class="p-5 grid grid-flow-row gap-5">

        
        @foreach ($datas as $data)
            <x-card.stat 

            :id="$data->id"
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