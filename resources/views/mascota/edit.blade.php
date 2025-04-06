@extends('layouts.app')
<link href="{{ asset('css/formularios/formRegistro.css') }}" rel="stylesheet" />
@section('template_title')
    {{ __('Update') }} Mascota
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Mascota</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('mascotas.update', $mascota->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('auth.registroMascotas')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
