@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($parties as $party)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$party->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$party->sign}}</h6>
                        <a href="{{route('vote.store',$party->id)}}" class="btn btn-success  ">Give Vote</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

