<x-guest-layout>
    @section('title')
    {{ $character['name'] }}
    @endsection
    <main class="text-white">
        <h1 class="text-2xl mt-3 text-center">{{ $character["name"] }} ({{$character->year}})</h1>
        <p class="text-center text-md">{{$character["alias"]}}</p>
        <div class="row">
            <div class="col-md-4 event-img2">
                <div class="w-80 h-full mx-auto">
                    @if($character->image)
                    <img src="{{ $character->image }}" alt="">
                    @else
                    <h1 class="text-center">Gambar belum tersedia</h1>
                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3 text-justify">
                    <p>{!! $character["body"] !!}</p>
                </div>
                <div>
                    <p>Identity : {{ $character->identity }}</p>
                    <p>Powers : </p>
                    <p>Teams : @foreach ($character->teams as $team)
                        {{ $loop->first ? '' : ', ' }}
                        <span>{{ $team->name }}</span>
                        @endforeach
                    </p>
                    <p>Universe : {{$character->universe->name}}</p>
                    <p>First Appearance : {{ $character->first_appearance }} </p>
                    <p>Last Appearance : {{ $character->last_appearance }} </p>
                    @if($next)
                    <p>Next : <a href="/character/{{ $next->slug }}">{{ $next->name }}</a></p>
                    @else

                    @endif
                    @if($previous)
                    <p>Previous : <a href="/character/{{ $previous->slug }}">{{ $previous->name }}</a></p>
                    @else

                    @endif
                </div>
                <div class="my-3">
                    <h2 class="text-xl text-center">Sejarah</h2>
                    <hr class="">
                </div>
                <div class="my-3 mx-auto">
                    {!! $character->issuelist !!}
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>