<div class="bg-indigo-900 text-purple-200 flex-none w-24 p-6 hidden md:block">
    @foreach(auth()->user()->groups as $loopGroup)
        <div class="cursor-pointer mb-4">
            <a href="{{ route('groups.show', $loopGroup) }}"
               class="@if($loopGroup->id == $group->id) bg-white @else bg-indigo-200 opacity-25 @endif h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-lg mb-1 overflow-hidden">
                {{ $loopGroup->letter }}
            </a>
        </div>
    @endforeach
    @include('groups._new_modal')
</div>
