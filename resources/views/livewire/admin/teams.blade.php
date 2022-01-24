<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <h1 class="text-2xl">List Teams</h1>
    <button wire:click="openCreateModal" class="btn btn-primary btn-md">Create Team</button>
    <table class="my-4 table table-striped table-hover table-lg table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Universe</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$team->name}}</td>
                <td>{{$team->universe->name}}</td>
                <td>
                    <button wire:click="selectItem({{ $team->id }}, 'edit')" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="selectItem({{ $team->id }}, 'delete')" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal Create -->
    <x-jet-dialog-modal wire:model="openCreateModal">
        <x-slot name="title">Create Team</x-slot>
        <x-slot name="content">
            <form enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="universe_id" class="form-label">Universe</label>
                    <select wire:model="universe_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="" autofocus required placeholder="Justice League">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid" alt="">
                    <input wire:model="image" class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="body" class="form-label">Contents</label>
                    <input id="body" class="@error('body') is-invalid @enderror form-control" type="hidden" name="body" />
                    <trix-editor wire:model.lazy="body" input="body"></trix-editor>
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <x-jet-button wire:click="createteam" class="bg-green-500 hover:bg-green-700">Create</x-jet-button>
                <x-jet-button wire:click="closeCreateModal" class="bg-blue-500 hover:bg-blue-700">Close</x-jet-button>
            </form>
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>
    <!-- Modal Edit -->
    <x-jet-dialog-modal wire:model="openEditModal">
        <x-slot name="title">Edit Team</x-slot>
        <x-slot name="content">
            <form enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="universe_id" class="form-label">Universe</label>
                    <select wire:model="universe_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="" autofocus required placeholder="Justice League">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <img class="img-preview img-fluid" alt="">
                    <input wire:model="image" class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="body" class="form-label">Contents</label>
                    <input id="body" class="@error('body') is-invalid @enderror form-control" type="hidden" name="body" />
                    <trix-editor wire:model.lazy="body" input="body"></trix-editor>
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <x-jet-button wire:click="updateteam" class="bg-green-500 hover:bg-green-700">Update</x-jet-button>
                <x-jet-button wire:click="closeEditModal" class="bg-blue-500 hover:bg-blue-700">Close</x-jet-button>
            </form>
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>
    <!-- Modal Delete -->
    <x-jet-dialog-modal wire:model="openDeleteModal">
        <x-slot name="title">Delete</x-slot>
        <x-slot name="content">Hapus team ini?</x-slot>
        <x-slot name="footer" class="gap-2">
            <x-jet-button wire:click="deleteteam" class="bg-red-500 hover:bg-red-700"> Delete
            </x-jet-button>
            <x-jet-button wire:click="closeDeleteModal" class="bg-blue-500 hover:bg-blue-700">Close</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>