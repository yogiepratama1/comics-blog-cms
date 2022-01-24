<x-guest-layout>
    @section('title')
    {{ $comic["name"] }}
    @endsection
    <div class="text-white">
        <h1 class="text-2xl my-4 text-center">{{ $comic["name"] }}</h1>
        <h1 class="text-xl  text-center">{{$comic->timeline->name}}</h1>
        <div class="row">
            <div class="col-md-4 ">
                @if($comic->image)
                <img class="w-96 mx-auto" src="{{ $comic->image }}" alt="">
                @else
                <h1 class="text-center">Gambar belum tersedia</h1>
                @endif

            </div>
            <div class="col-md-8">
                <div class="mb-3 text-justify">
                    <p>{!! $comic["body"] !!}</p>
                </div>
                <div>
                    <p>Universe : {{$comic->universe->name}}</p>
                    <p>Heroes :
                        @foreach ($comic->characters as $character)
                        {{ $loop->first ? '' : ', ' }}
                        <span>{{ $character->name }}</span>
                        @endforeach
                    </p>
                    <p>Villains : </p>
                    <p>Next : <a href="/event/{{ $next->slug }}" class="no-underline text-sky-500">{{ $next->name }}</a></p>
                    <p>Previous : <a href="/event/{{ $previous->slug }}" class="no-underline text-sky-500">{{ $previous->name }}</a></p>
                </div>
                <div class="my-3">
                    <h2 class="text-center text-xl">{{$comic->issuenumber}}</h2>
                    <h2 class="text-xl text-center">Issues</h2>
                </div>
                <div class="my-3 mx-auto">
                    {!! $comic->issuelist !!}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>