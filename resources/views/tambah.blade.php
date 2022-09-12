<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title>First Crud</title>
</head>

<body>
    <div class="p-2">
    <h1 style="text-align: left; padding:20px;">Tambah Data</h1>
    <div class="p-5">
    <form action="{{ route('user.save') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group mb-3">
          <label>Nama*</label>
          <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama_user">
        </div>
        <div class="form-group mb-3">
            <label>Email*</label>
            <input type="text" class="form-control" placeholder="Masukkan Email" name="email">
            <small id="emailHelp" class="form-text text-muted">Jangan lupa pakai@</small>
          </div>
          <div class=" form-group mb-3">
            <label class="form-label">Jenis Kelamin*</label>
            <select class="form-select" name="jekel" id="jekel">
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label>No. Telp</label>
            <input type="text" class="form-control" placeholder="Masukkan No.Telp" name="nohp">
          </div>
          <div class="form-group mb-3">
            <label>Alamat*</label>
            <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat">
          </div>
          <a href="/" class=" btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
    </div>
</body>
</html>