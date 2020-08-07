@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Halaman</div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['pages.update', $page->id], 'method' => 'put']) !!}
                        <div class="box-body">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label('Thumbnail') !!}
                                {!! Form::text('thumbnail', $page->thumbnail, ['class' => 'form-control', 'placeholder' => '']) !!}
                                @if ($errors->has('thumbnail'))
                                <span class="badge badge-danger">{!! $errors->first('thumbnail') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                {!! Form::label('Judul') !!}
                                {!! Form::text('title', $page->title, ['class' => 'form-control', 'placeholder' => '']) !!}
                                @if ($errors->has('title'))
                                <span class="badge badge-danger">{!! $errors->first('title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('sub_title')) has-error @endif">
                                {!! Form::label('Sub Judul') !!}
                                {!! Form::text('sub_title', $page->sub_title, ['class' => 'form-control', 'placeholder' => '']) !!}
                                @if ($errors->has('sub_title'))
                                <span class="badge badge-danger">{!! $errors->first('sub_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('details')) has-error @endif">
                                {!! Form::label('Detail') !!}
                                {!! Form::textarea('details', $page->details, ['class' => 'form-control', 'placeholder' => '']) !!}
                                @if ($errors->has('details'))
                                <span class="badge badge-danger">{!! $errors->first('details') !!}</span>@endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], isset($page->is_published) ? $page->is_published : null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="box-footer">
                            {!! Form::submit('Update',['class' => 'btn btn-sm btn-warning']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');
        });
    </script>
@endsection
