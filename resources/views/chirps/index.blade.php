<x-layout>
    <x-slot:title>Community Feed</x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <a href="/" class="group inline-flex items-center gap-2 text-sm font-bold text-base-content/40 hover:text-primary transition-colors">
                <span class="transition-transform group-hover:-translate-x-1">←</span> 
                Back to Landing Page
            </a>
        </div>

        <div class="card bg-base-100 shadow-sm border border-base-300 mb-8 overflow-hidden">
            <div class="card-body p-0">
                <form method="POST" action="{{ route('chirps.store') }}">
                    @csrf
                    <textarea
                        name="message"
                        class="textarea w-full p-6 bg-transparent text-lg focus:outline-none border-none placeholder:text-base-content/30 min-h-[150px] resize-none"
                        placeholder="What's happening?"
                    >{{ old('message') }}</textarea>
                    
                    <div class="flex items-center justify-between p-4 bg-base-200/50 border-t border-base-300">
                        <div class="flex gap-2">
                            <button type="button" class="btn btn-ghost btn-circle btn-sm">📸</button>
                            <button type="button" class="btn btn-ghost btn-circle btn-sm">📍</button>
                        </div>
                        <button class="btn btn-primary btn-sm px-8 rounded-full shadow-lg shadow-primary/20 font-bold">Chirp</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="space-y-4">
            @foreach ($chirps as $chirp)
                <div class="card bg-base-100 border border-base-300">
                    <div class="card-body p-6 flex flex-row gap-4">
                        <div class="avatar h-fit">
                            <div class="w-12 rounded-2xl">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($chirp->user->name) }}" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <div>
                                    <h4 class="font-bold inline text-base-content">{{ $chirp->user->name }}</h4>
                                    <span class="text-xs opacity-40 ml-2 italic">{{ $chirp->created_at->diffForHumans() }}</span>
                                    @unless ($chirp->created_at->eq($chirp->updated_at))
                                        <span class="text-[10px] opacity-30 ml-1 font-bold">· Edited</span>
                                    @endunless
                                </div>

                                @if ($chirp->user->is(auth()->user()))
                                    <div class="dropdown dropdown-end">
                                        <div tabindex="0" role="button" class="btn btn-ghost btn-xs opacity-40 hover:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </div>
                                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow-xl bg-base-100 rounded-box w-32 border border-base-300">
                                            <li><a href="{{ route('chirps.edit', $chirp) }}" class="text-sm font-semibold">Edit</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('chirps.destroy', $chirp) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="text-sm font-semibold text-error text-left w-full" onclick="return confirm('Hapus pesan ini?')">Delete</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <p class="text-base-content/80 leading-relaxed">{{ $chirp->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>