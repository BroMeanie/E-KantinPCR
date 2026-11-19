@extends('layouts.admin.app')
@section('title', 'Tambah Stan')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('stan.index') }}">Stan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
        <h1 class="h4">Tambah Stan</h1>
        <p class="mb-0">Isi data stan atau penjual yang berjualan di kantin.</p>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ route('stan.store') }}" method="POST" novalidate>
                        @csrf
                        @include('admin.stan._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
