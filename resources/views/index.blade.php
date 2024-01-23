@extends('layout')
@foreach ($book as $books)
<main>
  @section('title')
  @endsection
  @section('content')
      <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid>
        <div class="uk-card-body">
          <h3 class="uk-card-title">{{$book->title}}</h3>
          <p>{{$book->author}}</p>
          <p>{{$book->year}}</p>
          <small>{{$book->id}}</small>
        </div>
      </div>
      @endsection
    </main>
 @endforeach