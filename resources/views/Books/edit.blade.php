@extends('Books.master')
@section('title', 'Update Data')
@section('navbarmaster')
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title',$book->title) }}" aria-label="Username">
        <span class="input-group-text">Judul Buku</span>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="author" placeholder="Penulis" value="{{ old('author',$book->author) }}" aria-label="Username">
        <span class="input-group-text">Penulis</span>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <textarea class="form-control" aria-label="With textarea" name="description" placeholder="Deskripsi" value="{{ old('description',$book->description)}}"></textarea>
        <span class="input-group-text">Deskripsi</span>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>
@endsection
