@extends('layouts.layout')
@section('content')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Edit Book</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateBook') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $book->title }}" placeholder="Title">
                                        <span style="color:red">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Author</strong>
                                        <input type="text" name="author" class="form-control"
                                            value="{{ $book->author }}" placeholder="Author">
                                        <span style="color:red">
                                            @error('author')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value= "{{ $book->id }}">
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
