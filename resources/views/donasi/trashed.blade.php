@extends('layouts.main')

@section('title', 'Riwayat Donasi Dihapus')

@section('content')
<div class="container bg-white mx-auto p-8 mt-20 flex flex-col items-center rounded-2xl w-full max-w-7xl shadow-lg" style="margin-bottom: 120px; margin-top: 120px;">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Riwayat Donasi Dihapus</h2>

    <div class="overflow-x-auto w-full">
        <table class="min-w-full table-auto rounded-lg shadow-md bg-gray-50">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Nama Donatur</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-right">Nominal</th>
                    <th class="px-4 py-3 text-center">Status</th>
                    <th class="px-4 py-3 text-center">Waktu Dihapus</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white text-gray-700">
                @foreach($donasis as $donasi)
                <tr class="hover:bg-gray-100 transition-all">
                    <td class="border px-4 py-3 text-center">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-3">{{ $donasi->nama_donatur }}</td>
                    <td class="border px-4 py-3">{{ $donasi->email }}</td>
                    <td class="border px-4 py-3 text-right">{{ number_format($donasi->nominal, 0, ',', '.') }}</td>
                    <td class="border px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded-full 
                            {{ $donasi->status == 'dikonfirmasi' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ ucfirst($donasi->status) }}
                        </span>
                    </td>
                    <td class="border px-4 py-3 text-center">
                        {{ $donasi->deleted_at->format('d/m/Y H:i') }}
                    </td>
                    <td class="border px-4 py-3 text-center">
                        <form action="{{ route('donasi.restore', $donasi->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-white bg-green-500 hover:bg-green-600 py-2 px-4 rounded-lg shadow-md transition">
                                Pulihkan
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-6 w-full">
        {{ $donasis->links() }}
    </div>
</div>
@endsection
