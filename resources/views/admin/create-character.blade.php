<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Character') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/admin/dashboard/character" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value="" autofocus required placeholder="Batman">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="alias" class="form-label">Alias</label>
                            <input id="alias" name="alias" class="@error('alias') is-invalid @enderror form-control" placeholder="Bruce Wayne">
                            @error('alias')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3">
                        <div class="form-group">
                            <label for="identity" class="form-label">Identity</label>
                            <input id="identity" name="identity" class="@error('identity') is-invalid @enderror form-control" placeholder="Public / Secret">
                            @error('identity')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" id="year" name="year" class="@error('year') is-invalid @enderror form-control" placeholder="2011-present">
                            @error('year')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="first_appearance" class="form-label">First Appearance</label>
                            <input id="first_appearance" name="first_appearance" class="@error('first_appearance') is-invalid @enderror form-control" placeholder="Detective Comics #27">
                            @error('first_appearance')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="last_appearance" class="form-label">Last Appearance</label>
                            <input id="last_appearance" name="last_appearance" class="@error('last_appearance') is-invalid @enderror form-control" placeholder="Final Crisis #7">
                            @error('last_appearance')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="universe" class="form-label">Universe</label>
                        <select name="universe_id" id="universe_id" class="form-control" required>
                            @foreach ($universes as $universe)
                            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="image" class="form-label">Image Link</label>
                            <input id="image" name="image" class="@error('image') is-invalid @enderror form-control" value="" placeholder="linkhere...">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <strong>Teams</strong>
                        <select id='myselect' multiple name="teams[]">
                            <option value="">Select An Option</option>
                            @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
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