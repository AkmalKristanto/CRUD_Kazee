@include('includes.alerts')

@csrf

<div class="form-group">
    <input value="{{ $post->title ?? old('title') }}" class="form-control" type="text" name="title" placeholder="Nama Barang">
</div>
<div class="form-group">
    <input class="form-control" type="file" name="image">
</div>
<div class="form-group">
    <textarea class="form-control" name="body" cols="30" rows="5" placeholder="Deskripsi Barang">{{ $post->body ?? old('body') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Tambah</button>
</div>
