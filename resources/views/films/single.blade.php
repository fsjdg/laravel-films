@extends('layouts.app')

@section('content')

    <a href="/films">Back to Films</a>

    <h1 class="my-4">{{ $film->name }}</h1>

    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="{{ asset( "storage/".$film->photo ) }}" alt="">
        </div>

        <div class="col-md-4">

            <h3 class="my-3">Film Description</h3>
            <p>{{ $film->description }}</p>

            <h3 class="my-3">Details</h3>
            <ul>
                <li>Release Date: {{ $film->release_date }}</li>
                <li>Rating: {{ $film->rating }}</li>
                <li>Ticket Price: {{ $film->ticket_price }}</li>
                <li>Country: {{ $film->countries->name }}</li>
                <li>Genres: {{ $film->fancyGenres() }}</li>
            </ul>
        </div>

    </div>

    @auth

        <hr>
    <div class="comments row">

        <div class="col-md-12">
            <h1 class="my-4">{{ __("Time to comment...") }}</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/films/add/comment" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="comment" required></textarea>
                </div>
                <input type="hidden" name="film" value="{{ $film->id }}">
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
        @if( count($film->comments) > 0 )
            <div class="col-md-12">

                <h1 class="my-4">{{ __("What other people think...") }}</h1>

                @foreach( $film->comments as $comment )

                    <article>
                        <?php $user = App\User::find($comment->user); ?>
                        <strong>-{{ $user->name }} said:</strong>
                        <p>{{ $comment->comment }}</p>
                        <hr>
                    </article>

                @endforeach

            </div>
        @endif
    </div>
    @endauth


@endsection
