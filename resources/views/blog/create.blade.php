@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        @include('partials.errors')
            <h1 class="mt-4">Create a Post</h1>
        @include('partials.errors')
            <form method="POST" action="/create" enctype="multipart/form-data">
            @csrf()
                <div class="form-group">

                    <lable for="title">Title</lable>

                    <input type="text" name="title" class="form-control">

                </div>

                <div class="form-group">

                    <lable for="description">Description</lable>

                    <input type="description" name="description" class="form-control">

                </div>


                <div class="form-group">

                    <lable for="category">Category</lable>

                    <select type="category" name="category" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>

                </div>


                <div class="form-group">

                    <textarea name="body" class="form-control"></textarea>

                </div>


                <lable for="custom-file">
                    <input type="file" id="file" name="image" class="custom-form-control">
                    <span class="customer-file-control"></span>
                </lable>

                <div class="form-group mt-4">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection