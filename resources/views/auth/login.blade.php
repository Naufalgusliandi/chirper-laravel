<x-layout>
    <x-slot:title>Log In</x-slot:title>

    <div class="flex flex-col items-center justify-center py-12">
        <div class="text-center mb-10">
            <div class="inline-flex bg-primary text-primary-content w-16 h-16 rounded-2xl items-center justify-center text-3xl shadow-xl shadow-primary/20 mb-6">
                🐦
            </div>
            <h1 class="text-3xl font-black tracking-tight">Welcome Back!</h1>
            <p class="text-base-content/50 mt-2">Silakan masuk untuk melanjutkan aktivitasmu.</p>
        </div>

        <div class="card bg-base-100 w-full max-w-md shadow-2xl shadow-base-content/5 border border-base-300">
            <div class="card-body p-8 md:p-10">
                
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div class="form-control w-full">
                        <label class="label px-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Email Address</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus 
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="your@email.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="form-control w-full">
                        <div class="flex justify-between items-end px-1 mb-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Password</span>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs font-bold text-primary hover:underline">
                                    Forgot Password?
                                </a>
                            @endif
                        </div>
                        <input type="password" name="password" required autocomplete="current-password"
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="flex items-center px-1">
                        <label class="label cursor-pointer gap-3 justify-start">
                            <input type="checkbox" name="remember" class="checkbox checkbox-primary checkbox-sm rounded-md" />
                            <span class="label-text text-sm font-medium opacity-70">Ingat saya di perangkat ini</span>
                        </label>
                    </div>

                    <div class="pt-2 space-y-4">
                        <button type="submit" class="btn btn-primary w-full rounded-xl shadow-lg shadow-primary/20 font-bold">
                            Log In to Chirper
                        </button>
                        
                        <div class="text-center">
                            <p class="text-sm text-base-content/60">
                                Don't have an account? 
                                <a href="{{ route('register') }}" class="link link-primary font-bold no-underline hover:underline">Join free today</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <a href="/" class="mt-8 text-sm font-bold opacity-30 hover:opacity-100 transition-opacity flex items-center gap-2">
            ← Back to Landing Page
        </a>
    </div>
</x-layout>