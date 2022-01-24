<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/admin/dashboard" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Event</label>
                            <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="" autofocus required placeholder="Court of Owls">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="issuenumber" class="form-label">Issue</label>
                            <input type="number" id="issuenumber" name="issuenumber" class="@error('issuenumber') is-invalid @enderror form-control" value="" placeholder="10">
                            @error('issuenumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="recommended" class="form-label">Recommended | 1 Yes 0 No
                            </label>
                            <input type="number" id="recommended" name="recommended" class="@error('recommended') is-invalid @enderror form-control" value="" placeholder="10">
                            @error('recommended')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class=" mb-3">
                        <label for="universe" class="form-label">Universe</label>
                        <select name="universe_id" id="universe_id" class="form-control" required>
                            @foreach ($universes as $universe)
                            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" mb-3">
                        <label for="timeline" class="form-label">Timeline</label>
                        <select name="timeline_id" id="timeline_id" class="form-control" required>
                            @foreach ($timelines as $timeline)
                            <option value="{{ $timeline->id }}">{{ $timeline->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="image" class="form-label">Image Link</label>
                            <input type="text" id="image" name="image" class="@error('image') is-invalid @enderror form-control" value="" placeholder="10">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <strong>Characters</strong>
                        <select id='myselect' multiple name="characters[]">
                            <option value="">Select An Option</option>
                            @foreach ($characters as $character)
                            <option value="{{ $character->id }}">{{ $character->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="issuelist" class="form-label">Issue List</label>
                        <input id="issuelist" class="@error('issuelist') is-invalid @enderror form-control" type="hidden" name="issuelist" />
                        <trix-editor input="issuelist"></trix-editor>
                        @error('issuelist')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Contents</label>
                        <input id="body" required class="@error('body') is-invalid @enderror form-control" type="hidden" name="body" />
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#myselect').select2({
            width: '100%',
            placeholder: "Select an Option",
            allowClear: true
        });
    </script>

    <script>
        document.getElementById('name').addEventListener('change', (name) => {
            let slug = name.target.value;
            document.getElementById('slug').value = slug.trim().toLowerCase().replace(/[^\w]+/g, ' ').replace(/ +/g, '-')
        });
    </script>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

</x-app-layout>