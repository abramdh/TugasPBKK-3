    @extends('Books.master')
    @section('title', 'Halaman Utama')
    @section('navbarmaster')
    
    <h3 class="mt-2">Daftar Buku</h3> 
    <a href="{{ route('books.create')}}"class="btn btn-outline-success">Tambah</a>


    @if (session()->has('pesan'))
        <div style="color: green;">
            {{ session()->get('pesan') }}
        </div>
        <br>
    @endif
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th class="col">No</th>
          <th class="col">Judul</th>
          <th class="col">Penulis</th>
          <th class="col">Deskripsi</th>
          <th class="col">Waktu Dibuat </th>
          <th class="col-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $index => $book)
        <tr>
          <th>{{$index+1}}</th>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author }}</td>
          <td>{{ $book->description }}</td>
          <td>{{ $book->created_at}}</td>
          <td class="colspan-4">
            <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline-primary">Lihat</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-outline-dark">Edit</a>
            <form action="{{ route('books.destroy', $book->id) }}"  method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="Hapus" class="btn btn-outline-danger" >
          </form>   
          </td>
        </tr>
      @endforeach
    </table>
</body>
<script src="{{asset('dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
@endsection