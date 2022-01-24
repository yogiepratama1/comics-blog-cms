<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <h1 class="text-2xl">List Characters</h1>
    <a href="/admin/dashboard/character/create"><button class="btn btn-primary btn-md">Create Character</button></a>
    <table class="my-4 table table-striped table-hover table-lg table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Alias</th>
                <th>Name
                </th>
                <th>Identity</th>
                <th>Teams
                    <span wire:click="sortBy('name')" class="float-right flex items-center cursor-pointer">
                        <i class="iconify" data-icon="typcn:arrow-up" data-width="30" data-height="30"></i>
                        <i class="iconify" data-icon="typcn:arrow-down" data-width="30" data-height="30"></i>
                    </span>
                </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$loop->iteration}}</td>
                <td>{{$character->name}}</td>
                <td>{{$character->alias}}</td>
                <td>{{$character->identity}}</td>
                <td>
                    @foreach ($character->teams as $team)
                    {{ $loop->first ? '' : ', ' }}
                    <span>{{ $team->name }}</span>
                    @endforeach
                </td>
                <td>
                    <a href="/admin/dashboard/character/{{ $character->slug}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <button wire:click="selectItem({{ $character->id }}, 'delete')" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <!-- Modal Delete -->
            <x-jet-dialog-modal wire:model="deleteModal">
                <x-slot name="title">Delete</x-slot>
                <x-slot name="content">Hapus character ini?</x-slot>
                <x-slot name="footer" class="gap-2">
                    <x-jet-button wire:click="deletecharacter" class="bg-red-500 hover:bg-red-700"> Delete
                    </x-jet-button>
                    <x-jet-button wire:click="closeModal" class="bg-blue-500 hover:bg-blue-700">Close</x-jet-button>
                </x-slot>
            </x-jet-dialog-modal>
            @endforeach
        </tbody>
    </table>


</div>