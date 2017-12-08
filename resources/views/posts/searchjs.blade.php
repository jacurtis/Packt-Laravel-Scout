@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Search for Posts</h1>
    <form action="{{ route('posts.search') }}" method="get">
      {{ csrf_field() }}

      <div class="input-group">
        <input type="text" name="q" class="form-control input-lg" placeholder="Search for a post..." value="{{ old('q') }}"/>
        <span class="input-group-btn">
          <button class="btn btn-default btn-lg" type="submit">Search</button>
        </span>
      </div>
    </form>
    <hr />

    {{-- @foreach ($results as $post)
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-8">
          <a href="{{ route('posts.show', $post->id) }}"><h3>{{ $post->title }}</h3></a>
        </div>
        <div class="col-md-4">
          @if ($post->published)
            <h4><span class="label label-success pull-right">PUBLISHED</span><h4>
          @else
            <h4><span class="label label-default pull-right">DRAFT</span><h4>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>
            {{ str_limit($post->content, 250) }}
          </p>
        </div>
      </div>
    @endforeach --}}

    <ais-index app-id="{{ config('scout.algolia.id') }}"
           api-key="{{ env('ALGOLIA_SEARCH') }}"
           index-name="posts">

           <ais-input placeholder="Search Posts..."></ais-input>

           <ais-results></ais-results>
    </ais-index>


  </div>
@endsection


@section('scripts')
<script>
  var app = new Vue({
    el: '#app',
    data: {}
  });
</script>
@endsection
