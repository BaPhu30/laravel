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
        <a href="{{ route('admin.insert-shop-table') }}" class="btn btn-success">Create</a>
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
              <td class="d-flex justify-content-center">
                <img src="{{ $Shop->avatar }}">
              </td>
              @if($Shop->shopee_mall == '1')
              <td>Shopee Mall</td>
              @else
              <td>Không</td>
              @endif
              <td>
                <div class="w-100 d-flex">
                  <button id="edit-{{ $Shop->id }}" class="edit-data btn btn-warning mr-2" data-name="{{ $Shop->name }}">Edit</button>
                  <button id="delete-{{ $Shop->id }}" class="delete-data btn btn-danger">Delete</button>
                </div>
              </td>
            </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Link script admin/shop-table -->
<script src="{{ asset('/js/admin/shop-table.js') }}"></script>
@endpush