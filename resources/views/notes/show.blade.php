<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
            <h3 class="text-gray-100">{{ $note->title }}</h3>
            <h3 class="text-gray-100">{{ $note->body }}</h3>
            {{-- <h3 class="text-gray-100">{{ $note->cre }}</h3> --}}
        </div>

</x-app-layout>
