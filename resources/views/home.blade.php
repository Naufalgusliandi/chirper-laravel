<x-layout>
    <x-slot:title>Home</x-slot:title>

    <div class="flex flex-col items-center">
        <div class="text-center mb-16 space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-bold mb-4">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                New Updates Available
            </div>
            <h1 class="text-5xl md:text-7xl font-black tracking-tight leading-[1.1]">
                Share your thoughts<br/><span class="text-primary italic">instantly.</span>
            </h1>
            <p class="text-xl text-base-content/60 max-w-xl mx-auto leading-relaxed">
                Platform mikroblogging minimalis untuk berbagi momen tanpa gangguan. Bersih, cepat, dan elegan.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-6">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-2xl px-12 shadow-xl shadow-primary/20">Get Started</a>
                <button class="btn btn-outline btn-lg rounded-2xl border-base-300 hover:bg-base-300 hover:text-base-content">Explore Community</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full mt-12">
            <div class="card bg-base-100 border border-base-300 shadow-sm p-8 md:col-span-2">
                <div class="w-12 h-12 bg-blue-500/10 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-6">✨</div>
                <h3 class="text-2xl font-bold mb-2">Modern Interface</h3>
                <p class="text-base-content/60 leading-relaxed">Nikmati antarmuka yang dirancang khusus untuk kenyamanan mata dan kemudahan navigasi pengguna cerdas.</p>
            </div>
            <div class="card bg-primary text-primary-content p-8 shadow-xl shadow-primary/30 flex justify-between">
                <div>
                    <h3 class="text-2xl font-bold mb-2">100% Secure</h3>
                    <p class="text-primary-content/80">Data Anda dilindungi dengan enkripsi Laravel terbaru.</p>
                </div>
                <div class="text-4xl self-end opacity-20 font-black">2026</div>
            </div>
        </div>
    </div>
</x-layout>