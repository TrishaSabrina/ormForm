@extends('back.layout.master')
@section('title','show details')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
              <a class="btn btn-outline-primary" href="{{route('categories.index')}}">All Categories</a>  
          
            <p>{{$category->name}}</p>
                    <p>{{$category->details}}</p>
                 
            </div>
        </div>
    </div>
</div>

@endsection



