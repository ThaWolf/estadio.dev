@extends('layouts.cms')

@section('content')

    @foreach($tournaments as $tournament)
        <div class="col-xs-6">
            {{ $tournament->name }} 
            <a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}"
             class="btn btn-primary" style="margin-left: 5px;">
                <i class="fa fa-eye"></i>
            </a>
        </div>
    @endforeach

@endsection