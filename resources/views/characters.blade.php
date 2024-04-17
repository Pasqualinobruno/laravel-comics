@extends('layaouts.app')

@section('content')

<section class="junbotron">
    <div class="series">
        CURRENT SERIES
    </div>
</section>

<div class="container">
    <div class="row">
        @foreach($posts as $post)

        <div class="col-2">
            <div class="card">
                <img src="{{$post['thumb']}}" alt="">
                <p>{{$post['title']}}</p>
            </div>

        </div>

        @endforeach
    </div>
</div>









@endsection