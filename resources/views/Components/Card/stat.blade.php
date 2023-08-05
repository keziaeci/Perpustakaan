<div class="stats bg-slate-700 text-primary-content">
        
    <div class="stat">
        <div class="stat-title">Judul buku</div>
        <div class="stat-value">{{ $judul }}</div>
        <div class="stat-desc">{{ $waktu }}</div>
        {{-- <div class="stat-actions">
            <button class="btn btn-sm btn-success">{{ $data->status }}</button>
        </div> --}}
    </div>
    
    <div class="stat">
        <div class="stat-title">Peminjam</div>
        <div class="stat-value">{{ $nama }}</div>
        <div class="stat-desc">{{ $username }}</div>
        {{-- <div class="stat-actions">
            <button class="btn btn-sm btn-success">{{ $data->status }}</button>
        </div> --}}
    </div>

    <div class="stat">
        <div class="stat-figure text-secondary">
            <a href="{{ route('buku-request-edit',$id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </a>
        </div>

        <div class="stat-title">Jumlah buku </div>
        <div class="stat-value">{{ $jumlah }}</div>
        <div class="stat-desc"><div class="badge badge-neutral">{{ $status }}</div></div>

        {{-- <div class="stat-actions">
            <button class="btn btn-sm">Withdrawal</button> 
            <button class="btn btn-sm">deposit</button>
        </div> --}}
        
    </div>