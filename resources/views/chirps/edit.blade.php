<x-layout>
    <x-slot:title>Edit Chirp</x-slot:title>

    <div class="max-w-2xl mx-auto p-4">
        <h2 class="text-2xl font-black mb-6">Edit Chirp</h2>
        
        <div class="card bg-base-100 shadow-sm border border-base-300 overflow-hidden">
            <div class="card-body p-0">
                <form method="POST" action="{{ route('chirps.update', $chirp) }}">
                    @csrf
                    @method('patch')
                    <textarea
                        name="message"
                        class="textarea w-full p-6 bg-transparent text-lg focus:outline-none border-none min-h-[150px] resize-none"
                    >{{ old('message', $chirp->message) }}</textarea>
                    
                    <div class="flex items-center justify-end p-4 bg-base-200/50 border-t border-base-300 gap-3">
                        <a href="{{ route('chirps.index') }}" class="btn btn-ghost btn-sm">Cancel</a>
                        <button class="btn btn-primary btn-sm px-8 rounded-full font-bold">Update Chirp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>