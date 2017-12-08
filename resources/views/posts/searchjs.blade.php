@extends('layouts.app')

@section('content')
  <div class="container">
    <ais-index app-id="{{ config('scout.algolia.id') }}"
                api-key="{{ env('ALGOLIA_SEARCH') }}"
                index-name="posts">
    <h1>Search for Posts</h1>
    <ais-input placeholder="Search for a post..."></ais-input>
    <hr />

    <ais-results></ais-results>

      {{-- <div class="row" style="margin-top: 20px;">
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
      </div> --}}
    </ais-index>
  </div>
@endsection
