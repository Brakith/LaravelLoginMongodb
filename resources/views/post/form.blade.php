@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Form</div>

                <div class="card-body">
                    <form action="{{route('post.save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="usr">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="comment">Content:</label>
                            <textarea class="form-control" rows="5" name="content"></textarea>
                        </div> 
                        <p align="center"><button class="btn btn-primary">Save</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
