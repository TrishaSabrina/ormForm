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
                        <a class="btn btn-outline-danger" href="{{ route('categories.edit', $cat->id)}}">Edit</a>
                        <form class= "d-inline-block" action="{{route('categories.destroy', $cat->id)}}" method="post">
                        @csrf
                        @method('delete')

                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                    </form>
                    </td>
                    

                 </tr>
                 @endforeach
                </tbody>
            </table>

                


            </div>
       
@endsection