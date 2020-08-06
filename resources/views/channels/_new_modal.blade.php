<x-modal title="Create new group">
    <div class="cursor-pointer">
        <div class="bg-white opacity-25 h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-lg mb-1 overflow-hidden">
            <svg class="fill-current h-10 w-10 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z"/></svg>
        </div>
    </div>
    @slot('content')
        <x-form method="post" action="{{ route('groups.store') }}">
            @csrf

            <x-form-input name="title" />

            <x-modal-default-actions submit="Create" />
        </x-form>
    @endslot
</x-modal>
