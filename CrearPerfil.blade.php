@extends('layouts.app')

@section('title', 'Temas')


@section('content')
 <div class="container">
 	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: aqua">{{ __('Crear Tema') }}</div>
                 <div class="card-body" style="background: linear-gradient(aqua,black)">
                     <form method="POST" action="/JuansBook">
                      @csrf
                      <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Titulo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input type="textarea" class="form-control" name="Descripcion" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                     </form>
                 </div>
            </div>
        </div>
    </div>
 </div>
@endsection
