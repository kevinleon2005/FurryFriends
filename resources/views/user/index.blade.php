@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div class="m-3">
                        <form action="{{ route('users.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Buscar por nombre, apellido o email..." value="{{ request('search') }}">
                                        <button type="submit" class="btn btn-primary ms-2">Buscar</button>
                        </form>
                    </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios Registrados') }}
                            </span>

                             <!-- <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> -->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Fecha Nacimiento</th>
									<th >Telefono</th>
									<th >Email</th>
									<th >Tipo Documento</th>
									<th >Numero Documento</th>
									<th >Rol</th>
									<th >Direccion</th>
									<th >Foto Perfil</th>
									<th >Experiencia</th>
									<th >Numero Mascotas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $user->nombre }}</td>
										<td >{{ $user->apellido }}</td>
										<td >{{ $user->fecha_nacimiento }}</td>
										<td >{{ $user->telefono }}</td>
										<td >{{ $user->email }}</td>
										<td >{{ $user->tipo_documento }}</td>
										<td >{{ $user->numero_documento }}</td>
										<td >{{ $user->rol }}</td>
										<td >{{ $user->direccion }}</td>
										<td >{{ $user->foto_perfil }}</td>
										<td >{{ $user->experiencia }}</td>
										<td >{{ $user->numero_mascotas }}</td>

                                            <td>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show', $user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf -->
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->appends(['search' => request('search')])->links() !!}
            </div>
        </div>
        <a href="{{ route('dashboardAdm') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection
@section('footer')
    <footer id="contacto">
        <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
        <p>¿Tienes preguntas?</p>
        <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529
        <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
    </footer>
@endsection
