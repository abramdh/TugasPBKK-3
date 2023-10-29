@extends('Books.master')
@section('navbarmaster')
<h4>DATA BUKU</h4>
<br>

Judul: {{ $book->title }}
<br>
Penulis: {{ $book->author }}
<br>
Deskripsi: {{ $book->description }}   
@endsection

