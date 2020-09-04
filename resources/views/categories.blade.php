@extends('layouts.default')
@section('site-content')
    <div class="container">
        <div class="row p-4">
            <div class="col-sm-12">
                <h5 class="theme-color underlined">Categories</h5>
            </div>
            {{--@foreach($categories as $categories_array)--}}
                {{--<div class="col-sm-12">--}}
                    {{--<a data-toggle="collapse" data-role="button" href="#{{array_key_first($categories_array)}}" class="d-block theme-color">{{array_key_first($categories_array)}}</a>--}}
                    {{--<hr>--}}
                {{--</div>--}}
                {{--@if(count($categories_array[array_key_first($categories_array)]))--}}

                    {{--<div class="{{array_key_first($categories_array) == 'A' ? '' : 'collapse'}} col-sm-12 pb-3 bg-white" id="{{array_key_first($categories_array)}}">--}}
                        {{--@foreach($categories_array[array_key_first($categories_array)] as $category)--}}
                            {{--<a href="javascript:;" class="text-10 theme-color">{{$category['category']}}</a>--}}
                        {{--@endforeach--}}
                {{--</div>--}}
                {{--@endif--}}

            {{--@endforeach--}}
            @foreach($categories as $category)
                <div class="col-sm-12">

                    <i class="fa fa-arrow-right"></i> <a href="{{route('guest.categories.videos',$category->id)}}" class="theme-color text-10">{{$category->category}}</a>
                </div>
                @endforeach
        </div>
    </div>
    @endsection