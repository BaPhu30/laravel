@extends('admin/layout')

@push('styles')
<!-- Link style -->
<link rel="stylesheet" href="{{ asset('/css/admin/shop-table.css') }}">
@endpush

@section('sidebar-menu')
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="" class="nav-link">
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
          <a href="{{ route('admin.product-table') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Product Table</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link active">
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
          <a href="{{ route('admin.insert-shop-table') }}" class="nav-link active">
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
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
@endsection

@section('title')
Insert Shop Table
@endsection

@section('title-sub')
Insert Shop Table
@endsection

@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <h3 class="card-title w-100 d-flex align-items-center">Insert Shop Table</h3>
            <a href="{{ route('admin.shop-table') }}" class="btn btn-success">Back</a>
         </div>
         <div class="card-body">
            <form action="{{ route('admin.store.shop-table') }}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row mb-4">
                  <div class="col-12">
                     <label for="id-user-add" class="form-label">User Name:</label>
                     <select id="id-user-add" class="form-control" name="users_id">
                        @foreach ($Users as $User)
                        @if ($User->shops == null)
                        <option value="{{ $User->id }}">{{ $User->user->name }}</option>
                        @endif
                        @endforeach
                     </select>
                  </div>
                  <div class="col-12">
                     <label for="name-add" class="form-label">Name Shop:</label>
                     <input id="name-add" class="w-100 form-control bg-white" type="text" placeholder="Name Shop" name="name">
                     @if($errors->get('name'))
                     @foreach($errors->get('name') as $errorName)
                     <span class="text-red">* {{$errorName}}</span>
                     @endforeach
                     @endif
                  </div>
                  <div class="col-12">
                     <label for="avatar-add" class="form-label">Avatar Shop:</label>
                     <label for="avatar-add" class="btn btn-primary w-100 col-12">Choose Avatar Shop</label>
                     <input id="avatar-add" class="d-none" type="file" accept="image/*" name="avatar">
                     <div class="gallery-avatar-add"></div>
                  </div>
                  <div class="col-12">
                     <label for="shopee-mall-add" class="form-label">Shopee Mall:</label>
                     <input id="shopee-mall-add" class="bg-white" type="checkbox" name="shopeeMall">
                  </div>
               </div>
               <div class="d-flex justify-content-end">
                  <button class="btn btn-primary" type="submit">Save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection

@push('scripts')
<!-- Link script admin/shop-table -->
<script src="{{ asset('/js/admin/shop-table.js') }}"></script>
@endpush