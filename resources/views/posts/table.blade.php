@extends('layouts.app')
@section('title', 'Table Post')
@section('content')

    <h1>Table Blog Post <a style="float: right" href="{{ route('posts.create') }}">New Karyawan</a></h1>

    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota</th>
            </tr>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->kota }}</td>
                    <td><a href="{{ route('posts.edit', ['id' => $row->id]) }}">Edit</a> | <a
                            href="{{ route('posts.delete', ['id' => $row->id]) }}">Delete</a></td>
                </tr>
            @endforeach
        </thead>
    </table>

@endsection
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #D6EEEE;
    }
</style>
