@extends('layouts.app')
<link href="{{ asset('css/formularios/formRegistro.css') }}" rel="stylesheet" />
@section('template_title')
    {{ __('Create') }} Mascota
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Mascota</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('mascotas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('auth.registroMascotas')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection