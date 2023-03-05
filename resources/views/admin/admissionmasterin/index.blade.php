@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">List Admission Master Faculties</h4>
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
                            <th>Admission Faculties</th>
                            <th>Name [Uzbek]</th>
                            <th>Name [Russian]</th>
                            <th>Name [English]</th>
                            <th colspan="2" style="width: 2%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($admissionmasterins as $admissionmasterin)
                            <tr>
                                <td>{{ $admissionmasterin->id }}</td>
                                <td>
                                    <img src="{{ asset($admissionmasterin->image) }}" alt="" width="35" height="35">
                                </td>
                                <td>{{ $admissionmasterin->admissionmastercategory->title_en ?? "" }}</td>
                                <td>{{ $admissionmasterin->title_uz }}</td>
                                <td>{{ $admissionmasterin->title_ru }}</td>
                                <td>{{ $admissionmasterin->title_en }}</td>
                                <td>
                                    <a href="{{ route('admissionmasterin.edit', $admissionmasterin->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admissionmasterin.destroy', $admissionmasterin->id) }}" method="POST">
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
