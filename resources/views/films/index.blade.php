@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Release Date</th>
                <th scope="col">Country</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $films as $film )
            <tr>
                <th scope="row">{{ $film->id }}</th>
                <td>{{ $film->name }}</td>
                <td>{{ $film->release_date }}</td>
                <td>{{ $film->countries->name }}</td>
                <td><a href="{{ "films/".$film->slug }}">See More</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
