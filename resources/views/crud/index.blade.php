@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('createBook') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
										<th>Title</th>
										<th>Author</th>
                                        <th>Created</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            
                                            <td>{{ $book->id }}</td>
											<td>{{ $book->title }}</td>
											<td>{{ $book->author }}</td>
                                            <td>{{ $book->created_at }}</td>

                                            <td>                                             
                                                    <a class="btn btn-sm btn-primary" href="{{ route('editBook', $book->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="{{ route('deleteBook', $book->id) }}"><i class="fa fa-fw fa-edit"></i> Delete</a>                                              
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
@endsection