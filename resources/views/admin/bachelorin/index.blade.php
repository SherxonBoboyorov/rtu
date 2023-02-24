@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">List Bachelor Product</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Image</th>
                            <th>Bachelor Category</th>
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($bachelorins as $bachelorin)
                            <tr>
                                <td>{{ $bachelorin->id }}</td>
                                <td>
                                    <img src="{{ asset($bachelorin->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $bachelorin->bachelorcategory->title_en ?? "" }}</td>
                                <td>{{ $bachelorin->title_uz }}</td>
                                <td>{{ $bachelorin->title_ru }}</td>
                                <td>{{ $bachelorin->title_en }}</td>
                                <td>
                                    <a href="{{ route('bachelorin.edit', $bachelorin->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('bachelorin.destroy', $bachelorin->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
