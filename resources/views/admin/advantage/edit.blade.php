@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Advantages</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('advantage.update', $advantage->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_uz">Content [Uzbek]</label>
                                <input type="text" id="description_uz" value="{{ $advantage->description_uz }}" class="form-control" name="description_uz">
                                @if($errors->has('description_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_uz') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_ru">Content [Russian]</label>
                                <input type="text" id="description_ru" value="{{ $advantage->description_ru }}" class="form-control" name="description_ru">
                                @if($errors->has('description_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_en">Content [English]</label>
                                <input type="text" id="description_en" value="{{ $advantage->description_en }}" class="form-control" name="description_en">
                                @if($errors->has('description_en'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_en') }}
                                    </div>
                                @endif
                            </div>
                        </div><br>


                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="result">Number</label>
                                <input type="text" id="result" value="{{ $advantage->result }}" class="form-control" name="result">
                                @if($errors->has('result'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('result') }}
                                </div>
                                @endif
                            </div>
                        </div><br>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
