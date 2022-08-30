<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('inventaristype.edit', $inventaristype->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
        <input class="form-control" id="exampleFormControlInput1" placeholder="Isi Nama" value="{{$mahasiswa -> name}}" name="kodebarang">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
        <input class="form-control" id="exampleFormControlInput1" value="{{$inventaristype->nim}}" name="nim"></input>
        </div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
