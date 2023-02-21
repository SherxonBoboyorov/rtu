@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Leadership</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('leadership.update', $leadership->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="name_uz">Name [Uzbek]</label>
                            <input type="text" id="name_uz" value="{{ $leadership->name_uz }}" class="form-control" name="name_uz">
                            @if($errors->has('name_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_ru">Name [Russian]</label>
                            <input type="text" id="name_ru" value="{{ $leadership->name_ru }}" class="form-control" name="name_ru">
                            @if($errors->has('name_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_en">Name [English]</label>
                            <input type="text" id="name_en" value="{{ $leadership->name_en }}" class="form-control" name="name_en">
                            @if($errors->has('name_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="job_title_uz">Job title: [Uzbek]</label>
                            <input type="text" id="job_title_uz" value="{{ $leadership->job_title_uz }}" class="form-control" name="job_title_uz">
                            @if($errors->has('job_title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('job_title_uz') }}
                            </div>
                            @endif
                        </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="job_title_ru">Job title: [Russian]</label>
                                <input type="text" id="job_title_ru" value="{{ $leadership->job_title_ru }}" class="form-control" name="job_title_ru">
                                @if($errors->has('job_title_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('job_title_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="job_title_en">Job title: [English]</label>
                                <input type="text" id="job_title_en" value="{{ $leadership->job_title_en }}" class="form-control" name="job_title_en">
                                @if($errors->has('job_title_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('job_title_en') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="phone_number">Phone number:</label>
                                <input type="text" id="phone_number" value="{{ $leadership->phone_number }}" class="form-control" name="phone_number">
                                @if($errors->has('phone_number'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('phone_number') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                            <label for="reception_days_uz">Reception days: [Uzbek]</label>
                            <input type="text" id="reception_days_uz" value="{{ $leadership->reception_days_uz }}" class="form-control" name="reception_days_uz">
                            @if($errors->has('reception_days_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('reception_days_uz') }}
                            </div>
                            @endif
                        </div>
                      </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="reception_days_ru">Reception days: [Russian]</label>
                                <input type="text" id="reception_days_ru" value="{{ $leadership->reception_days_ru }}" class="form-control" name="reception_days_ru">
                                @if($errors->has('reception_days_ru'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('reception_days_ru') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="reception_days_en">Reception days: [English]</label>
                                <input type="text" id="reception_days_en" value="{{ $leadership->reception_days_en }}" class="form-control" name="reception_days_en">
                                @if($errors->has('reception_days_en'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('reception_days_en') }}
                                </div>
                                @endif
                            </div>
                        </div><br>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-3">
                                <label for="email">Email:</label>
                                <input type="text" id="email" value="{{ $leadership->email }}" class="form-control" name="email">
                                @if($errors->has('email'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                        </div><br><br>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="description_uz">Content [Uzbek]</label>
                            <textarea name="description_uz" class="my-editor" id="description_uz" cols="30" rows="10">{{ $leadership->description_uz }}</textarea>
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
                            <textarea name="description_ru" class="my-editor" id="description_ru" cols="30" rows="10">{{ $leadership->description_ru }}</textarea>
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
                            <textarea name="description_en" class="my-editor" id="description_en" cols="30" rows="10">{{ $leadership->description_en }}</textarea>
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
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file">
                            @if($errors->has('image'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset($leadership->image) }}" width="150" height="150" alt="">
                        </div>
                    </div><br><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

