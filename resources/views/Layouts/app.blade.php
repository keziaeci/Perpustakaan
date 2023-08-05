<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            

            <div class="navbar bg-base-100">
                <div class="flex-1">
                    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
                </div>
                <div class="flex-none gap-2">
                    <form action="{{ route('dashboard') }}" class="form-control">
                        @csrf 
                        <input type="text" placeholder="Cari buku" class="input input-ghost w-full max-w-xs" name="search" value="{{ request('search') }}"/>
                    </form>
                {{-- <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                </div> --}}
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </label>
                        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            
            {{ $slot }}

        </div> 
        
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay"></label> 
            <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a href="{{ route('dashboard') }}">Buku</a></li>
                @if (Auth::user()->role->isAdmin())
                    <li><a href="{{ route('transaksi') }}">Transaksi</a></li>
                @endif
                
                {{-- @if (Auth::user()->role->isAdmin())
                    <li><a>Request</a></li>
                @endif
                --}}
                @if (Auth::user()->role->isUser())
                    <li><a href="{{ route('buku-saya') }}">Buku Saya</a></li>
                @endif

                <li><form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('post')
                    <button class="btn btn-ghost" type="submit">logout</button>    
                </form></li>
            </ul>
        
        </div>
    </div>

</body>
</html>