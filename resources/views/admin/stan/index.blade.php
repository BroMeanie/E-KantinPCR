@extends('layouts.admin.app')
@section('title', 'Data Stan')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stan</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Data Stan</h1>
                <p class="mb-0">Daftar stan, penjual camilan, dan koperasi di kantin PCR.</p>
            </div>
            <div>
                <a href="{{ route('stan.create') }}" class="btn btn-success text-white">Tambah Stan</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-stan" class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">Nama stan</th>
                                    <th class="border-0">Jenis</th>
                                    <th class="border-0">Pemilik</th>
                                    <th class="border-0">Lokasi</th>
                                    <th class="border-0">WhatsApp</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0 rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataStan as $item)
                                    <tr>
                                        <td class="fw-bold">{{ $item->nama_stan }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->nama_pemilik ?? '-' }}</td>
                                        <td>{{ $item->lokasi ?? '-' }}</td>
                                        <td>{{ $item->no_whatsapp ?? '-' }}</td>
                                        <td>
                                            @if ($item->is_aktif)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-gray-500">Nonaktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('stan.edit', $item) }}" class="btn btn-info btn-sm">Ubah</a>
                                            <form action="{{ route('stan.destroy', $item) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Hapus stan {{ $item->nama_stan }}?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-gray-500 py-4">Belum ada data stan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
