@extends('layout.base')
@section('content')

<form class="form" action="/create/store" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="judul" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Judul:</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="form-group">
        <label for="penulis" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Penulis:</label>
        <input type="text" class="form-control" id="penulis" name="penulis" required>
    </div>
    <div class="form-group">
        <label for="harga" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Harga:</label>
        <input type="text" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="form-group">
        <label for="link" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Link Gambar:</label>
        <input type="text" class="form-control" id="link" name="link" required>
    </div>


    <input type="hidden" name="action" value="create post">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection