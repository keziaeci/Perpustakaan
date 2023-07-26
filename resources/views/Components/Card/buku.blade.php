<div class="card card-side bg-base-300 shadow-xl">
    {{-- <figure><img src="/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie"/></figure> --}}
    <div class="card-body">
        <h2 class="card-title">{{ $judul }}</h2>
        <p>{{ $sinopsis }}</p>
        <div class="card-actions justify-end">
            <form action="{{ route('buku-pinjam' , $id) }}" method="post">
                @csrf
                @method('post')
                <button class="btn btn-primary">Pinjam</button>
            </form>
        </div>
    </div>
</div>