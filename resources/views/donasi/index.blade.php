@extends('layouts.main')

@section('title', 'Daftar Donatur')

@section('content')
<div class="container bg-white mx-auto p-8 mt-20 flex flex-col items-center rounded-2xl w-full max-w-7xl shadow-lg" style="margin-top: 150px; margin-bottom: 100px;">

    {{-- Header --}}
    <div class="flex justify-center items-center mb-8 w-full">
        <h2 class="text-3xl font-bold text-center text-gray-800">Terima Kasih Kepada</h2>
    </div>

    {{-- Tombol Riwayat Donasi Dihapus --}}
    <div class="flex justify-end mb-6 w-full">
        <a href="{{ route('donasi.trashed') }}" class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600">
            Lihat Riwayat Donasi Dihapus
        </a>
    </div>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-6 w-full" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Data --}}
    <div class="overflow-x-auto w-full">
        <table class="min-w-full table-auto rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-right">Nominal</th>
                    <th class="px-4 py-3 text-center">Metode Pembayaran</th>
                    <th class="px-4 py-3 text-center">Tanggal</th>
                    <th class="px-4 py-3 text-center">Dukungan</th>
                    <th class="px-4 py-3 text-center">Status</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-700">
                @forelse ($donasis as $donasi)
                @if (!empty($donasi->id))
                <tr class="hover:bg-gray-100 transition-all">
                    <td class="border px-4 py-3 text-center">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-3">{{ $donasi->nama_donatur }}</td>
                    <td class="border px-4 py-3">{{ $donasi->email }}</td>
                    <td class="border px-4 py-3 text-right">{{ number_format($donasi->nominal, 0, ',', '.') }}</td>
                    <td class="border px-4 py-3 text-center">{{ $donasi->metode_pembayaran }}</td>
                    <td class="border px-4 py-3 text-center">{{ \Carbon\Carbon::parse($donasi->tanggal_donasi)->format('d/m/Y') }}</td>
                    <td class="border px-4 py-3">{{ $donasi->dukungan_doa }}</td>
                    <td class="border px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded-full 
                            {{ $donasi->status == 'dikonfirmasi' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ ucfirst($donasi->status) }}
                        </span>
                    </td>
                    <td class="border px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('donasi.edit', $donasi->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <form action="{{ route('donasi.destroy', $donasi->id) }}" method="POST" 
                                  onsubmit="return confirm('Yakin ingin menghapus?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endif
                @empty
                <tr>
                    <td colspan="8" class="text-center py-6 text-gray-500">Tidak ada data Donatur.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Tombol Tambah Donatur --}}
    <div class="mt-8">
        <a href="{{ route('donasi.create') }}" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-2xl transition">
            <i class="fa fa-plus"></i> Tambah Donatur
        </a>
    </div>

    {{-- Pagination --}}
    <div class="flex justify-center mt-6 w-full">
        {{ $donasis->links() }}
    </div>

</div>
@endsection
