@extends('back.layout.master')
@section('title', 'Create')
@section('content')
<div class="row">

<!-- option 1 -->
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
            <div class="col-md-6">

                <div class="head-love">


                    <h1>Create Category</h1>
                </div>


                <div class="form-box">
                    <form action="{{route('categories.store')}}" method="post">
                     @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                        </div><br>
                        <!-- option 2 -->
                       @error('name')
                       <span class="text-danger">{{$message}}</span>
                       @enderror

                        <div class="form-group">
                            <label for="name">Category Details</label>
                            <input type="text" class="form-control" id="details" name="details"
                                placeholder="Category Details">
                        </div><br>
                        @error('details')
                       <span class="text-danger">{{$message}}</span>
                       @enderror


                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>

                    </form>

                </div>


            </div>
        </div>
   

        @endsection