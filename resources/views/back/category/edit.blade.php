@extends('back.layout.master')
@section('title', 'Create')
@section('content')
<div class="row">
            <div class="col-md-6">

                <div class="head-love">


                    <h1>Edit Category</h1>
                </div>


                <div class="form-box">
                    <form action="{{route('categories.update', $category->id)}}" method="post">
                     @csrf
                     @method('put')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Category Name">
                        </div><br>

                        <div class="form-group">
                            <label for="name">Category Details</label>
                            <input type="text" class="form-control" id="details" name="details" value="{{$category->details}}"  placeholder="Category Details">
                        </div><br>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>

                    </form>

                </div>


            </div>
        </div>
   

        @endsection