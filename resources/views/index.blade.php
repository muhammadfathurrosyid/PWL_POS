<!-- resources/views/level/index.blade.php -->

@extends('layouts.app') {{-- Ganti dengan layout yang sesuai jika berbeda --}}

@section('content')
<div class="container">
    <h1>Daftar Level</h1>

    @if($levels->isEmpty())
        <p>Tidak ada data level yang tersedia.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Level</th>
                </tr>
            </thead>
            <tbody>
                @foreach($levels as $level)
                    <tr>
                        <td>{{ $level->id }}</td>
                        <td>{{ $level->nama_level ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
