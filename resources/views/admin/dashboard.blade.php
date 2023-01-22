@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($parties as $party)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Votes</div>

                    <div class="card-body">
                        <h3> <b>Party Name: </b> {{$party->name}} </h3>
                        <h3> <b>Sign:</b> {{$party->sign}}</h3>
                     <span>Total vote:</span> {{$party->vote->count()}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
