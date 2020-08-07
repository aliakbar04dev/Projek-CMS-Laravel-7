@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Galeri</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'galleries.store', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group @if($errors->has('image_url')) has-error @endif">
                            {!! Form::label('Gambar', null, ['style' => 'display: block;']) !!}
                            {!! Form::file('image_url[]', ['multiple' => 'multiple']) !!}
                            @if ($errors->has('image_url'))<span
                            <span class="badge badge-danger">{!! $errors->first('image_url') !!}</span>@endif
                        </div>

                        {!! Form::submit('Simpan',['class' => 'btn btn-sm btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
