<x-layout.app>
    <div class="grid grid-cols-5 gap-6">
        @foreach ($projects as $project)
            <div class="bg-slate-300 rounded-lg shadow-lg text-sky-950 ">
                <a class="w-full h-full flex flex-col p-4" href="{{ $project->path() }}">
                    <span class="font-bold">{{ $project->name }}</span>
                    <div class="py-2 text-sm text-opacity-50">
                        ▶ {{ $project->description }}
                    </div>

                    <hr class="border-sky-950 border-opacity-40"/>

                    <div class="flex items-center justify-between">
                        <div>{{ $project->proposals_count }} propostas</div>
                        <span class="bg-sky-300 text-sky-950 font-bold uppercase font-mono text-xs py-px px-2 rounded-lg ">concluído</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-layout.app>
