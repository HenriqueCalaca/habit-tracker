<x-layout>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>

        @auth
            <p>
                Bem vindo, {{ auth()->user()->name }}
            </p>
        @endauth
    </main>
</x-layout>

