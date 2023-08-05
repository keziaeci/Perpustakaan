<x-app-layout>

    <form action="{{ route('transaksi-store', $data->id) }}" method="POST">
        @method('patch')
        @csrf
        <div class="grid grid-cols-2 m-5">
            <div>
                <h1>Data Buku</h1>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Judul buku</span>
                    </label>
                    <input type="text" readonly value="{{ $data->buku->judul }}" class="input input-bordered w-full max-w-xs" disabled />
                </div>
        
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Pengarang</span>
                    </label>
                    <input type="text" readonly value="{{ $data->buku->pengarang }}" class="input input-bordered w-full max-w-xs" disabled />
                </div>
            
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Penerbit</span>
                    </label>
                    <input type="text" readonly value="{{ $data->buku->penerbit }}" class="input input-bordered w-full max-w-xs" disabled />
                </div>
            </div>
            
            <div>
                <h1>Data Peminjam</h1>
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Nama</span>
                    </label>
                    <input type="text" readonly value="{{ $data->user->name }}" class="input input-bordered w-full max-w-xs" disabled />
                </div>
        
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" readonly value="{{ $data->user->username }}" class="input input-bordered w-full max-w-xs" disabled />
                </div>
            </div>
            
        </div>
    
        <div class="m-5">
            <h1>Detail Transaksi</h1>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Diajukan</span>
                </label>
                <input type="text" readonly value="{{ $data->created_at->diffForHumans() }}" class="input input-bordered w-full max-w-xs" disabled />
            </div>
    
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Tanggal pinjam</span>
                </label>
                
                <input type="date" value="{{date('Y-m-d' , strtotime(now()->toDateTimeString()))}}"  name="tanggal_pinjam" class="input input-bordered w-full max-w-xs" readonly />
            </div>
            
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Batas Waktu </span>
                </label>
                
                <input type="date" value="{{date('Y-m-d' , strtotime(now()->addDays(7)->toDateTimeString()))}}"  name="batas_waktu" class="input input-bordered w-full max-w-xs" readonly />
            </div>
            {{-- <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Tanggal pinjam</span>
                </label>
                
                <input type="date"  name="tanggal_kembali" class="input input-bordered w-full max-w-xs"  />
            </div> --}}
    
        </div>
    
        <button class="btn btn-success" type="submit">Ijinkan</button>

    </form>

</x-app-layout>