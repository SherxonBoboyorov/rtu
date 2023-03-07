@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Extramural Education Directions</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('edicationin.update', $edicationin->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="edicationcategory_id">Extramural Education Faculties</label>
                            <select name="edicationcategory_id" id="edicationcategory_id" class="form-control">
                                @foreach ($edicationcategory as $edicationcategory)
                                <option @if($edicationcategory->id == $edicationin->edicationcategory_id) selected @endif value="{{ $edicationcategory->id }}">{{ $edicationcategory->title_en }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('edicationcategory_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('edicationcategory_id') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label for="title_uz">Title [Uzbek]</label>
                            <input type="text" id="title_uz" value="{{ $edicationin->title_uz }}" class="form-control" name="title_uz">
                            @if($errors->has('title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="title_ru">Title [Russian]</label>
                            <input type="text" id="title_ru" value="{{ $edicationin->title_ru }}" class="form-control" name="title_ru">
                            @if($errors->has('title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="title_en">Title [English]</label>
                            <input type="text" id="title_en" value="{{ $edicationin->title_en }}" class="form-control" name="title_en">
                            @if($errors->has('title_en'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_en') }}
                            </div>
                            @endif
                        </div>
                     </div><br>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="daytime_shalk_now">To’lov miqdori (Kunduzgi shakl)</label>
                            <input type="text" id="daytime_shalk_now" value="{{ $edicationin->daytime_shalk_now }}" class="form-control" name="daytime_shalk_now">
                            @if($errors->has('daytime_shalk_now'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('daytime_shalk_now') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="daytime_shalk_before">To’lov miqdori (Kunduzgi shakl) Chegirma</label>
                            <input type="text" id="daytime_shalk_before" value="{{ $edicationin->daytime_shalk_before }}" class="form-control" name="daytime_shalk_before">
                            @if($errors->has('daytime_shalk_before'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('daytime_shalk_before') }}
                            </div>
                            @endif
                        </div>
                    </div><br><br> <hr><br>



                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="evening_shalk_now">To’lov miqdori (Kechgi shakl)</label>
                            <input type="text" id="evening_shalk_now" value="{{ $edicationin->evening_shalk_now }}" class="form-control" name="evening_shalk_now">
                            @if($errors->has('evening_shalk_now'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('evening_shalk_now') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="evening_shalk_before">To’lov miqdori (Kechgi shakl) Chegirma</label>
                            <input type="text" id="evening_shalk_before" value="{{ $edicationin->evening_shalk_before }}" class="form-control" name="evening_shalk_before">
                            @if($errors->has('evening_shalk_before'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('evening_shalk_before') }}
                            </div>
                            @endif
                        </div>
                    </div><br><br> <hr><br>


                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="external_shalk_now">To’lov miqdori (Sirtqi shakl)</label>
                            <input type="text" id="external_shalk_now" value="{{ $edicationin->external_shalk_now }}" class="form-control" name="external_shalk_now">
                            @if($errors->has('external_shalk_now'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('external_shalk_now') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="external_shalk_before">To’lov miqdori (Sirtqi shakl) Chegirma</label>
                            <input type="text" id="external_shalk_before" value="{{ $edicationin->external_shalk_before }}" class="form-control" name="external_shalk_before">
                            @if($errors->has('external_shalk_before'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('external_shalk_before') }}
                            </div>
                            @endif
                        </div>
                    </div><br><br><br>

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
                            <img src="{{ asset($edicationin->image) }}" width="150" height="150" alt="">
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

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection

