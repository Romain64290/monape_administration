@extends('FormTemplate')


@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Envoi dune photo</h4>
            <div class="card-body">

                @if(session()->has('error'))
					<div class="alert alert-danger">{!! session('error') !!}</div>
                @endif
                
                <form action="{{ url('photo') }}" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="image"  value="{{ old('image') }}">
                        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>

            </div>
        </div>
    </div>
@endsection