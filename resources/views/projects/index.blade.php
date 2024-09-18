<x-layout.app>
    <div class="grid grid-cols-5 gap-6">
        @foreach ($projects as $project)
            <x-project-card :$project />
        @endforeach
    </div>
</x-layout.app>
