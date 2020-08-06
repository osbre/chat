@extends('layouts.base')

@section('title', $group->title)

@section('body')
    <div class="bg-indigo-800 text-purple-200 flex-none w-64 pb-6 hidden md:block">
        <div class="text-white mb-2 mt-3 px-4 flex justify-between">
            <div class="flex-auto">
                <h1 class="font-semibold text-xl leading-tight mb-1 truncate">{{ $group->title }}</h1>
                <div class="flex items-center mb-6">
                    <span class="bg-green-500 rounded-full block w-2 h-2 mr-2"></span>
                    <span class="text-white opacity-50 text-sm">{{ auth()->user()->name }}</span>
                </div>
            </div>
            <div>
                <svg class="h-6 w-6 fill-current text-white opacity-25" viewBox="0 0 20 20">
                    <path d="M14 8a4 4 0 1 0-8 0v7h8V8zM8.027 2.332A6.003 6.003 0 0 0 4 8v6l-3 2v1h18v-1l-3-2V8a6.003 6.003 0 0 0-4.027-5.668 2 2 0 1 0-3.945 0zM12 18a2 2 0 1 1-4 0h4z" fill-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="mb-8">
            <div class="px-4 mb-2 text-white flex justify-between items-center">
                <div class="opacity-75">Channels</div>
                <div>
                    <svg class="fill-current h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
                    </svg>
                </div>
            </div>
            <div class="bg-teal-600 py-1 px-4 text-white"># general</div>
        </div>
        <div class="mb-8">
            <div class="px-4 mb-2 text-white flex justify-between items-center">
                <div class="opacity-75">Direct Messages</div>
                <div>
                    <svg class="fill-current h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
                    </svg>
                </div>
            </div>
            <div class="flex items-center mb-3 px-4">
                <span class="bg-green-500 rounded-full block w-2 h-2 mr-2"></span>
                <span class="text-white opacity-75">Adam Wathan <span class="text-gray-500 text-sm">(you)</span></span>
            </div>
            <div class="flex items-center mb-3 px-4">
                <span class="bg-green-500 rounded-full block w-2 h-2 mr-2"></span>
                <span class="text-white opacity-75">David Hemphill</span>
            </div>
            <div class="flex items-center px-4 mb-6 opacity-50">
                <span class="border border-white rounded-full w-2 h-2 mr-2"></span>
                <span class="text-white">Steve Schoger</span>
            </div>
        </div>
        <div>
            <div class="px-4 mb-2 text-white flex justify-between items-center">
                <div class="opacity-75">Apps</div>
                <div>
                    <svg class="fill-current h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat content -->
    <div class="flex-1 flex flex-col bg-white overflow-hidden">
        <!-- Top bar -->
        <div class="border-b flex px-6 py-2 items-center flex-none">
            <div class="flex flex-col">
                <h3 class="text-gray-900 mb-1 font-extrabold">#general</h3>
                <div class="text-gray-600 text-sm truncate">
                    Chit-chattin' about ugly HTML and mixing of concerns.
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
        </div>
        <!-- Chat messages -->
        <div class="px-6 py-4 flex-1 overflow-y-scroll">
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/875010472105222144/Pkt9zqPY_400x400.jpg" class="w-10 h-10 rounded mr-3">
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Steve Schoger</span>
                        <span class="text-gray-500 text-xs">11:46</span>
                    </div>
                    <p class="text-black leading-normal">The slack from the other side.</p>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/887661330832003072/Zp6rA_e2_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">Adam Wathan</span>
                        <span class="text-gray-500 text-xs">12:45</span>
                    </div>
                    <p class="text-black leading-normal">How are we supposed to control the marquee space without an utility for it? I propose this:</p>
                    <div class="bg-gray-200 border border-gray-400 text-gray-900 text-sm font-mono rounded p-3 mt-2 whitespace-pre overflow-scroll">.marquee-lightspeed { -webkit-marquee-speed: fast; }
                        .marquee-lightspeeder { -webkit-marquee-speed: faster; }</div>
                </div>
            </div>
            <!-- A message -->
            <div class="flex items-start mb-4 text-sm">
                <img src="https://pbs.twimg.com/profile_images/929910740156215296/yDEC9GW9_400x400.jpg" class="w-10 h-10 rounded mr-3" />
                <div class="flex-1 overflow-hidden">
                    <div>
                        <span class="font-bold">David Hemphill</span>
                        <span class="text-gray-500 text-xs">12:46</span>
                    </div>
                    <p class="text-black leading-normal"><a href="#" class="inline-block bg-blue-100 text-blue-500 ">@Adam Wathan</a> the size of the generated CSS is creating a singularity in space/time, we must stop adding more utilities before it's too late!</p>
                </div>
            </div>
        </div>
        <div class="pb-6 px-4 flex-none">
            <div class="flex rounded-lg border-2 border-gray-500 overflow-hidden">
                <span class="text-3xl text-gray-500 border-r-2 border-gray-500 p-2">
                    <svg class="fill-current h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z"/></svg>
                  </span>
                <input type="text" class="w-full px-4" placeholder="Message #general" />
            </div>
        </div>
    </div>
@endsection
