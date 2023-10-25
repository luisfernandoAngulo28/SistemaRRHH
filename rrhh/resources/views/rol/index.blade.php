@extends('layouts.estilo')

@section('tabla')
<div class="container-xl">

    <section class="section">
  <div class="section-header">
      <h3 class="page__heading">Lista de Roles</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                              <a class="btn btn-dark" href="{{ route('roles.create') }}">Nuevo</a>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead style="background-color:#6777ef">
                                  <tr>
                                      <th style="display: none; color:#fff;">ID</th>
                                      <th style=>Nombre</th>
                                      <th style=>E-mail</th>
                                      <th style=>Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>
                                          <!--roles/{role}/edit-->
                                          <!---->
                                          <form action="{{route('roles.destroy',$role)}}" method="POST">
                                              {{-- <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Asignar rol</a> --}}
                                              <a href="{{route('roles.edit', $role)}}" class="btn btn-primary">Editar</a>
                                              @csrf  <!--metodo para añadir token a un formulario-->
                                              @method('delete')
                                              <button type="submit" class="btn btn-danger">Eliminar</button>
                                          </form>
                                        </td>
                                    </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
</div>
@endsection