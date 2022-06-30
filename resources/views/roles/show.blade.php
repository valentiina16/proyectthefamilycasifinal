@extends('layouts.main', ['activePage' => 'roles', 'titlePage' => 'Detalles del rol'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Roles</h4>
            <p class="card-category">Vista detallada del rol {{ $role->name }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              <!-- first -->
              <div class="col-md-4 m-auto">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <h5 class="title mt-3">Rol: {{ $role->name }}</h5>
                        </a>
                        <p class="description">
                          {{ _('Ceo/Co-Founder') }} <br>
                          {{ $role->guard_name }} <br>
                          {{ $role->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      @forelse ($role->permissions as $permission)
                          <span class="badge rounded-pill badge-info text-white">{{ $permission->name }}</span>
                      @empty
                          <span class="badge badge-danger bg-danger">No permissions</span>
                      @endforelse
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('roles.index')}}" class="btn btn-sm btn-success mr-3">Volver</a>
                      <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">Editar</a>
                  </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection
