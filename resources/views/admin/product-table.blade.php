@extends('admin/layout')

@push('styles')
<!-- Link style -->
<link rel="stylesheet" href="{{ asset('/css/admin/product-table.css') }}">
@endpush

@section('sidebar-menu')
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <li class="nav-item">
      <a href="" class="nav-link active">
        <i class="nav-icon fas fa-table"></i>
        <p>
          TABLE
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
          <a href="{{ route('admin.shop-table') }}" class="nav-link">
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
          <a href="{{ route('admin.product-table') }}" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.bill-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.bill-info-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Info Table</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
          INSERT TABLE
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.insert-user-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-roles-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Roles Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-user-role-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>User Role Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-shop-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Shop Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-category-dad-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category Dad Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-category-child-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category Child Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-product-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-bill-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Table</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.insert-bill-info-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Bill Info Table</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
@endsection

@section('title')
Product Table
@endsection

@section('title-sub')
Product Table
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title w-100 d-flex align-items-center">Product Table</h3>
        <button class="create-data btn btn-success">Create</button>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover mb-3">
          <thead>
            <tr>
              <th>ID</th>
              <th>ID CATEGORY CHILD</th>
              <th>ID SHOP</th>
              <th>TITLE</th>
              <th>IMG</th>
              <th>VIDEO</th>
              <th>SOLD</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Product as $Products)
            <tr>
              <td>{{ $Products->id }}</td>
              <td>{{ $Products->category_child_id }}</td>
              <td>{{ $Products->shop_id }}</td>
              <td>{{ $Products->title }}</td>
              <td>{{ $Products->img }}</td>
              <td>{{ $Products->video }}</td>
              <td>{{ $Products->sold }}</td>
              <td>
                <div class="w-100 d-flex">
                  <button id="edit-{{ $Products->id }}" class="edit-data btn btn-warning mr-2" data-name="{{ $Products->name }}">Edit</button>
                  <button id="delete-{{ $Products->id }}" class="delete-data btn btn-danger">Delete</button>
                </div>
              </td>
            </tr>
            @endforeach
        </table>
        {{ $Product->links() }}
      </div>
    </div>
  </div>
</div>
@endsection