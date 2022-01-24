<div class="text-white">
    <style>
        /* hidden on mobile/smaller screens */
        @media screen and (min-width: 768px) {
            .desktop {
                display: none;
            }
        }
    </style>
    <h1 class="text-center text-2xl text-white my-4">DC Characters</h1>
    <section id="teams" class="my-4">
        <div x-data="{ openTab: 1 , activeClasses: ' text-white bold-semibold border-b-4 border-indigo-500', inactiveClasses:''}">
            <div class="grid grid-cols-3 text-center">
                <div @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class=" hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Justice League
                </div>
                <div @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Justice Society of America
                </div>
                <div @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                    Batman Family
                </div>
            </div>
            <div x-show="openTab === 1" class="bg-gray-600">
                <div x-data="{ openTab: 1 , activeClasses: ' text-white bold-semibold border-b-4 border-indigo-500', inactiveClasses:''}">
                    @foreach ($justiceleague as $character)
                    <div class="grid grid-cols-4 md:grid-cols-6 text-center ">
                        <div @click="openTab = {{$character->id}}" :class="openTab === {{ $character->id }} ? activeClasses : inactiveClasses" class=" hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                            {{ $character->name }}
                        </div>
                    </div>
                    <div x-show="openTab === {{ $character->id }}" class="bg-gray-600">
                        <h1 class="text-2xl text-center"><a href="/character/{{$character->slug}}">{{ $character->name }}</a></h1>
                        <h1 class="text-xl text-center">{{ $character->universe->name }}<br>({{$character->year}})</h1>
                        <img class="w-80 mx-auto" src="{{ $character->image }}" alt="{{ $character->name }}" border="0">
                    </div>
                    @endforeach
                </div>
            </div>
            <div x-show="openTab === 2" class="bg-gray-600">
                <div x-data="{ openTab: 1 , activeClasses: ' text-white bold-semibold border-b-4 border-indigo-500', inactiveClasses:''}">
                    @foreach ($justicesociety as $character)
                    <div class="grid grid-cols-4 md:grid-cols-6 text-center ">
                        <div @click="openTab = {{$character->id}}" :class="openTab === {{ $character->id }} ? activeClasses : inactiveClasses" class=" hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                            {{ $character->name }}
                        </div>
                    </div>
                    <div x-show="openTab === {{ $character->id }}" class="bg-gray-600">
                        <h1 class="text-2xl text-center">
                            <<a href="/character/{{$character->slug}}">{{ $character->name }}</a>
                        </h1>
                        <h1 class="text-xl text-center">{{ $character->universe->name }}<br>({{ $character->year }})</h1>
                        <img class="w-80 mx-auto" src="{{ $character->image }}" alt="{{ $character->name }}" border="0">
                    </div>
                    @endforeach
                </div>
            </div>
            <div x-show="openTab === 3" class="bg-gray-600">
                <div x-data="{ openTab: 1 , activeClasses: ' text-white bold-semibold border-b-4 border-indigo-500', inactiveClasses:''}">
                    @foreach ($batfamily as $character)
                    <div class="grid grid-cols-4 md:grid-cols-6 text-center ">
                        <div @click="openTab = {{$character->id}}" :class="openTab === {{ $character->id }} ? activeClasses : inactiveClasses" class=" hover:bg-gray-100 hover:text-black hover:font-semibold p-3 cursor-pointer">
                            {{ $character->name }}
                        </div>
                    </div>
                    <div x-show="openTab === {{ $character->id }}" class="bg-gray-600">
                        <h1 class="text-2xl text-center">
                            <a href="/character/{{$character->slug}}">{{ $character->name }}</a>
                        </h1>
                        <h1 class="text-xl text-center">{{ $character->universe->name }}<br>({{ $character->year }})</h1>
                        <img class="w-80 mx-auto" src="{{ $character->image }}" alt="{{ $character->name }}" border="0">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <main>
        <h1 class="text-center text-2xl">Characters List</h1>
        <input wire:model.debounce="search" class=" h-10 px-5 rounded-lg text-sm text-dark" type="search" name="search" placeholder="Search">
        <div class="grid md:grid-cols-4 grid-cols-2 mt-4 gap-4">
            @foreach ($characters as $character)
            <div class="">
                <a href="/character/{{$character->slug}}">
                    <h1 class="text-2xl text-center">{{ $character->name }}</h1>
                </a>
                <h1 class="text-xl text-center">{{ $character->universe->name }}<br>({{ $character->year }})</h1>
                <img src="{{ $character->image }}.jpg" alt="{{ $character->name }}" border="0">
            </div>
            @endforeach
        </div>
    </main>
</div>