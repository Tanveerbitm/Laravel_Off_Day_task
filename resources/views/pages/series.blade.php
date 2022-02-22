@extends('layout.app')
@section('title')
    Series
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Series</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('series')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Start Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="start_number" value="@if(isset($startValue)){{$startValue}}@endif"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">End Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="end_number" value="@if(isset($endValue)){{$endValue}}@endif"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <textarea readonly class="form-control">@if(isset($result)){{$result}}@else{{''}}@endif
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark btn-block" value="submit" name="prm_btn">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
