@extends('layouts.base')

@section('title', $group->title)

@section('body')
    @include('groups._list')
    @include('channels._list')

    <!-- Chat content -->
    <main class="flex-1 flex flex-col bg-white overflow-hidden">
        <!-- Top bar -->
        <nav class="border-b flex px-6 py-2 items-center flex-none">
            <div class="flex flex-col">
                <h3 class="text-gray-900 mb-1 font-extrabold">#{{ $channel->title }}</h3>
                <div class="text-gray-600 text-sm truncate">
                    Channel description here.
                </div>
            </div>
            <div class="ml-auto hidden md:block">
                <div class="relative">
                    <input type="search" placeholder="Search" class="appearance-none border border-gray-500 rounded-lg pl-8 pr-4 py-2">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center justify-center">
                        <svg class="fill-current text-gray-500 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                        </svg>
                    </div>
                </div>
            </div>
        </nav>

        <section x-data="{}" x-subscribe class="px-6 py-4 flex-1 overflow-y-scroll">
            <template x-for="message in $store.application.messages"
                      :key="message">
                <div class="flex items-start mb-4 text-sm">
                    <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                    <div class="flex-1 overflow-hidden">
                        <div>
                            <span class="font-bold" x-text="message.user.name"></span>
                            <span class="text-gray-500 text-xs">11:46</span>
                        </div>
                        <p class="text-black leading-normal" x-text="message.body"></p>
                    </div>
                </div>
            </template>
        </section>

        <section class="pb-6 px-4 flex-none" x-data="message()">
            <div class="flex rounded-lg border-2 border-gray-500 overflow-hidden">
                <span class="text-3xl text-gray-500 border-r-2 border-gray-500 p-2">
                    <svg class="fill-current h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z"/></svg>
                  </span>
                <input x-model="message"
                       x-on:keydown.enter="send()"
                       type="text"
                       class="w-full px-4"
                       placeholder="Message #{{ $channel->title }}" />
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        Spruce.store('application', {
            channel: '{{ optional($channel)->title }}',
            messages: {!! optional($channel)->messages->toJson() !!},
        })

        // TODO - move to app.js
        function message() {
            return {
                message: '',
                send() {
                    axios.post('{{ route('channels.messages.store', $channel) }}', {
                        body: this.message
                    });
                },
            }
        }

        Echo.private('App.Channel.{{ $channel->id }}')
            .listen('NewMessage', (e) => {
                $store.application.messages.push(e.message);
                console.log(e)
            });
    </script>
@endpush
