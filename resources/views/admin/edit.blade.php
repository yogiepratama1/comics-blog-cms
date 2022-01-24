<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <h1 class="mt-5 h2 text-center">Edit Event</h1>
    @if(session()->has('error'))
    <div class="alert alert-primary" role="alert">
        {{ session('error') }}
    </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/admin/dashboard/{{ $comic->slug }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Event</label>
                        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="{{old('name', $comic->name )}}" autofocus required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="recommended" class="form-label">Recommended | 1 Yes 0 No
                            </label>
                            <input type="number" id="recommended" name="recommended" class="@error('recommended') is-invalid @enderror form-control" value="{{old('recommended', $comic->recommended )}}" placeholder="10">
                            @error('recommended')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="issuenumber" class="form-label">Issue</label>
                            <input type="number" id="issuenumber" name="issuenumber" class="@error('issuenumber') is-invalid @enderror form-control" value="{{old('issuenumber', $comic->issuenumber )}}" placeholder="10">
                            @error('issuenumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class=" mb-3">
                        <label for="universe" class="form-label">Universe</label>
                        <select name="universe_id" id="universe_id" class="form-control">
                            @foreach ($universes as $universe)
                            @if(old('universe_id', $comic->universe_id) == $universe->id)
                            <option value="{{ $universe->id }}" selected>{{ $universe->name }}</option>
                            @else
                            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="timeline" class="form-label">Timeline</label>
                        <select name="timeline_id" class="form-control">
                            @foreach ($timelines as $timeline)
                            @if(old('timeline_id', $comic->timeline_id) == $timeline->id)
                            <option value="{{ $timeline->id }}" selected>{{ $timeline->name }}</option>
                            @else
                            <option value="{{ $timeline->id }}">{{ $timeline->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Pilih Characters</label>
                        <select id="myselect" multiple name="characters[]">
                            @foreach($characters as $character)
                            <option value="{{ $character->id }}" @foreach($comic->characters as $value)
                                @if($character->id == $value->id)
                                selected
                                @endif
                                @endforeach
                                >{{ $character->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image Link</label>
                        <input id="image" class="@error('image') is-invalid @enderror form-control" type="text" name="image" value="{{old('image', $comic->image )}}" />
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="issuelist" class="form-label">Issue List</label>
                        <input id="issuelist" class="@error('issuelist') is-invalid @enderror form-control" type="hidden" name="issuelist" value="{{old('issuelist', $comic->issuelist )}}" />
                        <trix-editor input="issuelist"></trix-editor>
                        @error('issuelist')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Contents</label>
                        <input id="body" required class="@error('body') is-invalid @enderror form-control" type="hidden" name="body" value="{{old('body', $comic->body )}}" />
                        <trix-editor input="body"></trix-editor>
                        @error('contents')
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
</x-app-layout>
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


<script>
    document.getElementById('name').addEventListener('change', (name) => {
        let slug = name.target.value;
        document.getElementById('slug').value = slug.trim().toLowerCase().replace(/[^\w]+/g, ' ').replace(/ +/g, '-')
    });
</script>

<script>
    $('#myselect').select2({
        width: '100%',
        placeholder: "Select an Option",
        allowClear: true
    });
</script>