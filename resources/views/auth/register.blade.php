<x-layout>
    <x-slot:title>Join Chirper</x-slot:title>

    <div class="flex flex-col lg:flex-row items-center justify-center gap-16 py-8">
        <div class="hidden lg:flex flex-col max-w-sm space-y-6">
            <div class="bg-primary text-primary-content w-16 h-16 rounded-2xl flex items-center justify-center text-3xl shadow-xl shadow-primary/20">
                🐦
            </div>
            <h1 class="text-4xl font-black tracking-tight leading-tight">
                Bergabung dengan <br/><span class="text-primary">Komunitas Kreatif.</span>
            </h1>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold">✓</span>
                    <p class="text-base-content/60 text-sm">Bagikan ide dan pemikiranmu secara instan kepada dunia.</p>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold">✓</span>
                    <p class="text-base-content/60 text-sm">Antarmuka minimalis untuk fokus maksimal pada konten.</p>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold">✓</span>
                    <p class="text-base-content/60 text-sm">Keamanan data terjamin dengan enkripsi mutakhir.</p>
                </li>
            </ul>
        </div>

        <div class="card bg-base-100 w-full max-w-md shadow-2xl shadow-base-content/5 border border-base-300">
            <div class="card-body p-8 md:p-10">
                <div class="mb-8 text-center lg:text-left">
                    <h2 class="text-2xl font-black mb-2">Create Account</h2>
                    <p class="text-sm text-base-content/50">Mulai perjalananmu di Chirper hari ini.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <div class="form-control w-full">
                        <label class="label px-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Full Name</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus 
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="Naufal Gus" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="form-control w-full">
                        <label class="label px-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Email Address</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required 
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="nama@gmail.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="form-control w-full">
                        <label class="label px-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Password</span>
                        </label>
                        <input type="password" name="password" required autocomplete="new-password"
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="form-control w-full">
                        <label class="label px-1">
                            <span class="label-text font-bold text-xs uppercase tracking-widest opacity-60">Confirm Password</span>
                        </label>
                        <input type="password" name="password_confirmation" required 
                            class="input input-bordered bg-base-200/50 focus:bg-base-100 border-base-300 focus:border-primary transition-all w-full rounded-xl" 
                            placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-xs text-error" />
                    </div>

                    <div class="pt-4 space-y-4">
                        <button type="submit" class="btn btn-primary w-full rounded-xl shadow-lg shadow-primary/20 font-bold">
                            Create My Account
                        </button>
                        
                        <div class="text-center">
                            <p class="text-sm text-base-content/60">
                                Already have an account? 
                                <a href="{{ route('login') }}" class="link link-primary font-bold no-underline hover:underline">Log in</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>