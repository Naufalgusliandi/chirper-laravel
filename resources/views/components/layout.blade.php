<!DOCTYPE html>
<html lang="en" data-theme="nord">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' — Chirper' : 'Chirper' }}</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-base-200/50 text-base-content antialiased">
    <nav class="navbar bg-base-100/80 backdrop-blur-md sticky top-0 z-50 px-6 md:px-12 border-b border-base-300">
        <div class="navbar-start">
            <a href="/" class="text-2xl font-black tracking-tighter text-primary flex items-center gap-2 hover:opacity-80 transition-all">
                <span class="bg-primary text-primary-content p-1.5 rounded-xl text-lg shadow-lg shadow-primary/20">🐦</span>
                Chirper
            </a>
        </div>
        <div class="navbar-end gap-3">
            @auth
                <a href="{{ route('chirps.index') }}" class="btn btn-ghost btn-sm font-semibold">Feed</a>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar border border-base-300">
                        <div class="w-10 rounded-full">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random" />
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow-xl border border-base-300">
                        <li><a class="py-3">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-error w-full text-left">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-ghost btn-sm font-bold text-base-content/70">Sign In</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm px-6 rounded-full shadow-md shadow-primary/20">Join Free</a>
            @endauth
        </div>
    </nav>

    <main class="flex-1 container mx-auto max-w-5xl px-6 py-16">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-10 bg-base-100 text-base-content border-t border-base-300">
        <aside>
            <div class="text-xl font-bold opacity-30 mb-2">🐦 Chirper</div>
            <p class="font-medium">© {{ date('Y') }} — Built with Precision</p>
            <p class="text-xs opacity-50">Developed by **Naufal Gusliandi** (230170161)</p>
        </aside>
    </footer>
</body>
</html>