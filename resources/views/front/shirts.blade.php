@extends('layout.main')

@section('title','shirts')
@section('content')
<div class="row">
    @forelse($shirts as $shirt)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{url('images',$shirt->image)}}"/>
                </a>
            </div>
            <a href="{{route('shirt')}}">
                <h3>
                        {{$shirt->name}}
                </h3>
            </a>
            <h5>
                   ${{$shirt->price}}
            </h5>
            <p>
                    {{$shirt->description}}
            </p>
        </div>
    </div>
    
        @empty
        <h3>No shirts</h3>
        @endforelse
            
        
    </div>
    
@endsection