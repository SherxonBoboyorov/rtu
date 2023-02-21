@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Team</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('team.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label>Departments & Staff</label>
                            <select name="department_id" id="department_id" class="form-control">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->title_en }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('department_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('department_id') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label>Faculties</label>
                            <select name="faculty_id" id="faculty_id" class="form-control">
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->title_en }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('faculty_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('faculty_id') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">

                        <div class="col-md-3">
                            <label for="name_uz">Name [Uzbek]</label>
                            <input type="text" id="name_uz" class="form-control" name="name_uz">
                            @if($errors->has('name_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="name_ru">Name [Russian]</label>
                            <input type="text" id="name_ru" class="form-control" name="name_ru">
                            @if($errors->has('name_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="name_en">Name [English]</label>
                            <input type="text" id="name_en" class="form-control" name="name_en">
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
                            <input type="text" id="job_title_uz" class="form-control" name="job_title_uz">
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
                                <input type="text" id="job_title_ru" class="form-control" name="job_title_ru">
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
                                <input type="text" id="job_title_en" class="form-control" name="job_title_en">
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
                                <input type="text" id="phone_number" class="form-control" name="phone_number">
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
                            <input type="text" id="reception_days_uz" class="form-control" name="reception_days_uz">
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
                                <input type="text" id="reception_days_ru" class="form-control" name="reception_days_ru">
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
                                <input type="text" id="reception_days_en" class="form-control" name="reception_days_en">
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
                                <input type="text" id="email" class="form-control" name="email">
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
                            <textarea name="description_uz" class="my-editor" id="description_uz" cols="30" rows="10"></textarea>
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
                            <textarea name="description_ru" class="my-editor" id="description_ru" cols="30" rows="10"></textarea>
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
                            <textarea name="description_en" class="my-editor" id="description_en" cols="30" rows="10"></textarea>
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
                            <label for="meta_title_ru">Meta Title RU</label>
                            <textarea name="meta_title_ru" class="form-control" id="meta_title_ru" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_ru">Meta Description RU</label>
                            <textarea name="meta_description_ru" class="form-control" id="meta_description_ru" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_description_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_uz">Meta Title UZ</label>
                            <textarea name="meta_title_uz" class="form-control" id="meta_title_uz" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_uz">Meta Description UZ</label>
                            <textarea name="meta_description_uz" class="form-control" id="meta_description_uz" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_description_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_en">Meta Title EN</label>
                            <textarea name="meta_title_en" class="form-control" id="meta_title_en" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_en') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_en">Meta Description EN</label>
                            <textarea name="meta_description_en" class="form-control" id="meta_description_en" cols="30" rows="5"></textarea>
                            @if($errors->has('meta_description_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_en') }}
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
                    </div><br><br>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
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

