@extends('layouts.app')
@section('title', 'Create new post')
@section('content')
    <h1>Create a New Karyawan</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Nama </label>
        <input class="@error('nama') error-border @enderror" type="text" name="nama">
        @error('nama')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <label>Kota </label>
        <textarea class="@error('kota') error-border @enderror" name="kota"></textarea>
        @error('kota')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <button type="submit">Submit</button>
        <a style="float: right;background-color: #fa0808; color: white; padding: 10px 15px; text-decoration: none;"
            href="{{ route('posts.table') }}">Back</a>

    </form>

@endsection
