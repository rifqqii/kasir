@extends('layouts.main', ['title' => 'Profile'])
@section('title-content')
<i class="fas fa-user mr-2"></i>
 Profile
 @endsection
 @section('content')
 <div class="row">
    <div class="col-x4-4 col-lg-4">
        @if (session('update') == 'succes')
            <x-alert type="success">
              <strong>Berhasil di Update!</strong> Profile berhasil diupdate.
            </x-alert>
        @endif
        <div class="card card-blue card-outline">
            <div class="card-body >">
                <p>Nama : <strong>{{$user->nama}}</strong></p>
                <p>Username : {{$user->username}}</p>
                <p>Dibuat Tanggal :{{$user->created_at}}</p>
                <p>Diupadate Tanggal : {{$user->updated_at}}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                </div>
        </div>
    </div>
    </div>
    @endsection