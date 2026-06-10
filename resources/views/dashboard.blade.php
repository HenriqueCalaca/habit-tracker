<x-layout>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>


        <p>
            Bem vindo, {{ auth()->user()->name }}
        </p>

        <div>
            <h2 class="text-xl mt-4">
                Listagem dos Hábitos
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse($habits as $item)
                <li>
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">
                           - {{ $item->name }}
                        </p>
                        <p>
                            [{{ $item->habitLogs->count() }}]
                        </p>
                    </div>
                </li>
                @empty
                    <p>
                        Você ainda não tem hábitos cadastrados
                    </p>
                    <a href="/habito/cadastrar" class="bg-white p-2 border-2">
                        Cadastre um novo hábito
                    </a>
                @endforelse
            </ul>

        </div>

    </main>
</x-layout>

