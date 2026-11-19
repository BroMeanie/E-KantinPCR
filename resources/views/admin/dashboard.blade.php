@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('content')
    <div class="py-4">
        <h1 class="h4">Dashboard</h1>
        <p class="mb-0">Ringkasan data kantin PCR.</p>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h2 class="h6 text-gray-400 mb-1">Total stan</h2>
                    <h3 class="fw-extrabold mb-0">{{ $totalStan }}</h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h2 class="h6 text-gray-400 mb-1">Stan aktif</h2>
                    <h3 class="fw-extrabold mb-0">{{ $stanAktif }}</h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h2 class="h6 text-gray-400 mb-2">Stan per jenis</h2>
                    @forelse ($perJenis as $jenis => $jumlah)
                        <div class="d-flex justify-content-between">
                            <span>{{ $jenis }}</span>
                            <span class="fw-bold">{{ $jumlah }}</span>
                        </div>
                    @empty
                        <span class="text-gray-500">Belum ada data.</span>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
