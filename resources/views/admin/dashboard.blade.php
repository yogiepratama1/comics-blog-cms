<x-app-layout>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--  -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        @if(session()->has('berhasil'))
        <div class="alert alert-primary text-center" role="alert">
            {{ session('berhasil') }}
        </div>
        @endif
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div x-data="{ openTab: 1 }" class="p-6">
                    <ul class="flex border-b justify-center gap-3">
                        <li @click="openTab = 1" class="-mb-px mr-1">
                            <button class="inline-block rounded-t py-2 px-4 btn btn-success text-blue-700 font-semibold">Events</button>
                        </li>
                        <li @click="openTab = 2" class="mr-1">
                            <button class="inline-block rounded-t py-2 px-4 btn btn-info text-blue-700 font-semibold">Characters</button>
                        </li>
                        <li @click="openTab = 3" class="mr-1">
                            <button class="inline-block rounded-t py-2 px-4 btn btn-warning text-blue-700 font-semibold">Teams</button>
                        </li>
                    </ul>
                    <div class="w-full pt-4">
                        <div x-show="openTab === 1">
                            <livewire:admin.comics />
                        </div>
                        <div x-show="openTab === 2">
                            <livewire:admin.characters />
                        </div>
                        <div x-show="openTab === 3">
                            <livewire:admin.teams />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>