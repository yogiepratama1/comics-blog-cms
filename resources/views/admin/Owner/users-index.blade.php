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
                            <button class="inline-block rounded-t py-2 px-4 btn btn-success text-blue-700 font-semibold">User List</button>
                        </li>
                    </ul>
                    <div class="w-full pt-4">
                        <div x-show="openTab === 1">
                            <table class="my-4 table table-striped table-hover table-lg table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>
                                            <form action="/admin/dashboard/user{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="/admin/dashboard/user/{{$user->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>