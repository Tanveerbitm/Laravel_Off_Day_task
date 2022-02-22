@extends('layout.app')
@section('title')
    Series
@endsection
@section('body')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($details as $element)
            <div class="col-md-8 mb-4 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{$element['image']}}" alt="image" class="card-img-top p-3"  height="300"/>
                            <h2 class="card-title px-5 text-center">{{$element['name']}}</h2>

                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="font-weight-bold" style="font-size: 2rem">$ {{$element['price']}}</b></p>
                                <p class="font-weight-bold">brand: {{$element['brand']}}</p>
                                <p class="font-weight-bold">category: {{$element['category']}}</p>
                                <hr />
                                <b class="font-weight-bold">Description: </b>
                                <br />
                                <p>{{$element['description']}}</p>
                                <hr />
                                <a href="{{route('home')}}" class="btn btn-outline-dark">Back</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>

</section>
@endsection
