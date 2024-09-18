<x-layout.app>

    <div class="mx-auto max-w-4xl grid grid-cols-2 gap-6">
        <div class="flex flex-col gap-4">
            <x-project-card :$project/>

            <form action="{{ route('proposal.store', $project) }}" method="post">
                @csrf
                <x-card>

                    @if($errors->isNotEmpty())
                        <div class="bg-red-100 text-red-700 p-2 rounded-md">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-sm">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>


                    @endif

                    <div class="flex items-center gap-6">
                        <x-input type="number" name="hours" placeholder="horas"/>
                        <x-input type="text" name="email" placeholder="Email"/>
                    </div>
                    <button class="bg-sky-950 shadow text-slate-100 rounded-md w-full mt-4 py-1 hover:bg-sky-800">
                        Enviar
                    </button>
                </x-card>
            </form>
        </div>

        <div class="flex gap-5 flex-col">
            @foreach($proposals as $proposal)
                <x-card>
                    <div class="flex items-center justify-between">
                        <div> {{ $proposal->user->email }} </div>
                        <div> {{ $proposal->hours }} horas</div>
                    </div>
                    <div class="text-sm text-op">{{ $proposal->created_at->diffForHumans() }}</div>
                </x-card>
            @endforeach
        </div>
    </div>
</x-layout.app>
