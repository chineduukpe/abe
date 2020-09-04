@extends('layouts.user-dashboard')
@section('admin-dashboard-content')
    <div class="row py-3">
        @if($subscribers->count())
            @foreach($subscribers as $subscriber)
                <div class="col-md-3 py-2">
                    <p class="text-muted text-10">{{$subscriber->email}}</p>
                </div>
                @endforeach
            @endif
    </div>
    @endsection