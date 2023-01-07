@extends('base')

@section('title')
    @parent - Liste des maisons
@endsection

@section('content')
    <h1>Liste de maisons</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($houses as $house)
            @include('houses.partials._house_card', ['house' => $house])
        @endforeach
    </div>
    <div class="row mt-2">
    {{ $houses->links() }}
    </div>
@endsection
