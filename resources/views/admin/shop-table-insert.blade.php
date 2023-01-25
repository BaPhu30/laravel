@extends('admin/layout')

@push('styles')
<!-- Link style -->
<link rel="stylesheet" href="{{ asset('/css/admin/shop-table.css') }}">
@endpush

@section('sidebar-menu')
<!-- Sidebar Menu -->

<!-- /.sidebar-menu -->
@endsection

@section('title')
Insert User Role Table
@endsection

@section('title-sub')
Insert User Role Table
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
              <label for="name-add" class="form-label">Name Shop:</label>
              <input id="name-add" class="w-100 form-control bg-white" type="text" placeholder="Name Shop" name="name">
            </div>
            <div class="col-12">
              <label for="avatar-add" class="form-label">Avatar Shop:</label>
              <label for="avatar-add" class="btn btn-primary w-100 col-12">Choose Avatar Shop</label>
              <input id="avatar-add" class="d-none" type="file" accept="image/*" name="avatar">
              <div class="gallery-avatar-add"></div>
            </div>
            <div class="col-12">
              <label for="shopee-mall-add" class="form-label">Shopee Mall:</label>
              <input id="shopee-mall-add" class="bg-white" type="checkbox" name="shopee-mall">
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
<!-- Link script admin/user-role-table -->
<script src="{{ asset('/js/admin/user-role-table.js') }}"></script>
@endpush