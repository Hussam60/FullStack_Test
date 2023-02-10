@extends('main')
@section('content')
<div class="row" style="padding:20px ;">
    <!--div class="col-lg-6"-->
        <!-- Blog post-->
        <!--div class="card mb-6">
            <a href="#!"><img class="card-img-top"
                    src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">January 1, 2022</div>
                <h2 class="card-title h4">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Reiciendis aliquid atque, nulla.</p>
                <a class="btn btn-primary" href="#!">Read more →</a>
            </div>
        </div-->
        <!-- Blog post-->

    <!--/div -->
    @forelse ($products as $product )

{{$product->body}}
    <div class="col-lg-6">
        <!-- Blog post-->
        <div class="card mb-6">
            <a href="#!"><img class="card-img-top"
                    src="{{asset('images/'.$product->image)}}" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">{{$product->created_at}}</div>
                <h2 class="card-title h4">{{$product->title}}</h2>
                <p class="card-text">{{$product->body}}</p>
                <a class="btn btn-primary" href="#!">Read more →</a>
            </div>
        </div>
        <!-- Blog post-->

    </div>
    @empty


    @endforelse
</div>
@endsection
