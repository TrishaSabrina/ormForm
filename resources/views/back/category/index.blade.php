@extends('back.layout.master')
@section('title', 'All Categories')
@section('content')
<div class="row">


            <div class="col-md-6">
            <a class="btn btn-outline-primary" href="{{route('categories.create')}}">Create Categories</a> 


           <h1> Categories List </h1>
           
            <table class="table table-bordered table-primary table-striped">
                <thead>
                 <tr>
                    <th>Category Name</th>
                    
                    <th>Category Details</th>
                    <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                 @foreach($categories as $cat)
                 <tr>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->details}}</td>
                    <td>
                        <a class="btn btn-outline-danger" href="{{ route('categories.show', $cat->id)}}">Show</a>
                    </td>

                 </tr>
                 @endforeach
                </tbody>
            </table>

                


            </div>
       
@endsection