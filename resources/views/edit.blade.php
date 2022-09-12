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
    <h1 style="text-align: left; padding:20px;">Edit Data</h1>
    <div class="p-5">
    <form action="{{ route('user.update' , ['id_user => $user-> id_user']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label>Nama*</label>
          <input name="nama_user" type="text" class="form-control" placeholder="Masukkan nama lengkap" value="{{ $user->nama_user}}">
        </div>
        <div class="form-group mb-3">
            <label>Email*</label>
            <input name="email" type="text" class="form-control" placeholder="Masukkan Email" value="{{ $user->email}}">
            <small id="emailHelp" class="form-text text-muted">Jangan lupa pakai@</small>
          </div>
          <div class=" form-group mb-3">
            <label class="form-label">Jenis Kelamin*</label>
            <select class="form-control" id="jekel" name="jekel">
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>

              <script> 
              document.getElementById('jekel').value = "{{ $user->jekel }}";
             </script>
            </select>
          </div>
          <div class="form-group mb-3">
            <label>No. Hp</label>
            <input name="nohp" type="text" class="form-control" placeholder="Masukkan No. Hp" value="{{ $user->nohp}}">
          </div>
          <div class="form-group mb-3">
            <label>Alamat*</label>
            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat">{{ $user->alamat}}</textarea>
          </div>
        <a href="/" class=" btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    </div>
</body>
</html>