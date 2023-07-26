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
                    <li><a>Transaksi</a></li>
                @endif

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