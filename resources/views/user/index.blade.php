@extends('layouts.main', ['title' => 'User'])
@section('title-content')
<i class="fas fa-users mr-2"></i>
 User
 @endsection

@section('content')
@if 9ession('store') == 'succes')
    <x-alert type="success">
        <strong>Berhasil di Dibuat!</strong> User berhasil Dibuat.
    </x-alert>
@endif
@if (session('update') == 'succes')
    <x-alert type="success">
        <strong>Berhasil di Update!</strong> User berhasil diupdate.
    </x-alert>
@endif

@if (session('destroy') == 'succes')
    <x-alert type="success">
        <strong>Berhasil di Hapus!</strong> User berhasil dihapus.
    </x-alert>
@endif

<div class="card- cardorange card-outline">
    <div class="card-header-form-inline">
        <a href="{{ route('user.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
             Tambah 
        </a>
        <form action="?" method="get" class="ml-auto">
            <div class="input-group">
                <input type="text" class="form-control" name="search" value="<?= request()->search?>"
                    placeholder="Nama, Username">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
            </div>
        </form>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Username</th>
                    <th></th>
</tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)  
                <tr>
                    <td>{{ $users->firstItem() + $key }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->username }}</td>
                    <td class="text-right">
                    <a href="{{ route('user.edit', [
                    'user' => $user->id
                    ]) }}" 
                    class="btn btn-xs test-succes p-0 mr-1">
                    <i class="fas fa-edit"></i>
                    </a>

                    <button type="button" data-toggle="modal" data-target="#modalDelete" 
                    data-url="{{ route('user.destroy', [
                    'user' => $user->id
                    ]) }}" class="btn btn-xs text-danger p-0 btn-delete">
                    <i class="fas fa-trash"></i>
</button> 
</td>
</tr>
@endforeeach
</tbody>
</table>
</div>

<div class="card-footer">
    {{ $users->links('vendor .pagination.bootstrap-4') }}
</div>
</div>
@endsection

@push('modals')
<x-modal-delete />
@endpush1