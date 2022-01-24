<div>
    <h1 class="text-2xl">List Events</h1>
    <a href="/admin/dashboard/create"><button class="btn btn-primary btn-md">Create Event</button></a>
    <div id="new52">
        <h1>New 52</h1>
        <table class="my-4 table table-striped table-hover table-lg table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pos</th>
                    <th>Comics</th>
                    <th>Recommended</th>
                    <th>Universe</th>
                    <th>Timeline</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody wire:sortable="updateOrder">
                @foreach($comicsnew52 as $comic)
                <tr wire:sortable.item="{{ $comic->id }}" wire:key="comic-{{ $comic->id }}">
                    <td>{{$loop->iteration}}</td>
                    <td><i class="iconify cursor-pointer" data-icon="feather:move"></i></td>
                    <td>{{$comic->name}}</td>
                    <td>{{$comic->recommended}}</td>
                    <td>{{$comic->universe->name}}</td>
                    <td>{{$comic->timeline->name}}</td>
                    </td>
                    <td>
                        <form action="/admin/dashboard/{{ $comic->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/admin/dashboard/{{ $comic->slug}}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus event ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="rebirth">
        <h1>Rebirth</h1>
        <table class="my-4 table table-striped table-hover table-lg table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pos</th>
                    <th>Comics</th>
                    <th>Recommended</th>
                    <th>Universe</th>
                    <th>Timeline</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody wire:sortable="updateOrder">
                @foreach($comicsrebirth as $comic)
                <tr wire:sortable.item="{{ $comic->id }}" wire:key="comic-{{ $comic->id }}">
                    <td>{{$loop->iteration}}</td>
                    <td><i class="iconify cursor-pointer" data-icon="feather:move"></i></td>
                    <td>{{$comic->name}}</td>
                    <td>{{$comic->recommended}}</td>
                    <td>{{$comic->universe->name}}</td>
                    <td>{{$comic->timeline->name}}</td>
                    </td>
                    <td>
                        <form action="/admin/dashboard/{{ $comic->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/admin/dashboard/{{ $comic->slug}}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus event ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (session()->has('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil') }}
    </div>
    @endif
</div>