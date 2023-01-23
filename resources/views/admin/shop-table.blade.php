@extends('admin/layout')

@section('sidebar-menu')
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="" class="nav-link active">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Table
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.user-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.roles-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Roles Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.user-role-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User Role Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.shop-table') }}" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Shop Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.category-dad-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category Dad Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.category-child-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category Child Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.product-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Info Table</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
          Tables
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="pages/tables/simple.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Simple Tables</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/tables/data.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>DataTables</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/tables/jsgrid.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>jsGrid</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
@endsection

@section('title')
Shop Table
@endsection

@section('title-sub')
Shop Table
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title w-100 d-flex align-items-center">Shop Table</h3>
        <button class="create-data btn btn-success">Create</button>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover mb-3">
          <thead>
            <tr>
              <th>ID</th>
              <th>USER-ROLE-ID</th>
              <th>NAME</th>
              <th>AVATAR</th>
              <th>SHOPEEMALL</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Shops as $Shop)
            <tr>
              <td>{{ $Shop->id }}</td>
              <td>{{ $Shop->user_role_id }}</td>
              <td>{{ $Shop->name }}</td>
              <td>{{ $Shop->avatar }}</td>
              <td>{{ $Shop->shopee_mall }}</td>
              <td>
                <div class="w-100 d-flex">
                  <button id="edit-{{ $Shop->id }}" class="edit-data btn btn-warning mr-2" data-name="{{ $Shop->name }}">Edit</button>
                  <button id="delete-{{ $Shop->id }}" class="delete-data btn btn-danger">Delete</button>
                </div>
              </td>
            </tr>
            @endforeach
        </table>
        {{ $Shops->links() }}
      </div>
    </div>
  </div>
</div>
@endsection