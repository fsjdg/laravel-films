@extends('layouts.app')

@section('content')

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

    <form method="post" action="/films/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>Release Date</label>
            <input type="date" name="release_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Rating</label>
            <select name="rating" class="form-control" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="form-group">
            <label>Ticket Price</label>
            <input type="number" name="ticket_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Country</label>
            <select name="country" class="form-control" required>
                <option value=""></option>
                @foreach( $countries as $c )
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group genres">
            <label>Genres</label>
            <input type="text" name="genres[]" class="form-control" required>

        </div>
        <a href="" class="add_genres">Add new Genre</a>

        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

    </form>

@endsection

@section('scripts')

    <script>

        $(document).ready(function(){
            $('.add_genres').click(function(e){

                var $element = $('<div></div>').append('<input type="text" name="genres[]" class="form-control" required>')
                    .append('<a href="" class="remove"> Remove </a>');

                $element.find('.remove').click(function(){
                    $(this).parent('div').remove();
                    return false;
                });

                $('.genres').append($element);
                return false;

            });
        });

    </script>

@endsection

