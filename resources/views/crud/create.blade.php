@extends('layouts.layout')
@section('content')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Book</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('saveBook') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <span style="color:red">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Author</strong>
                                        <input type="text"  name="author" class="form-control" placeholder="Author">
                                    </div>
                                    <span style="color:red">
                                        @error('author')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>       
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-primary" href="{{ route('viewBooks') }}"> Cancel</a>   
                                </div>
                            </div>
                           
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection