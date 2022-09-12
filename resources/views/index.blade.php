<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" 
     integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
     integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>First Crud</title>
</head>

<body>
  <div class="p-3">
    <h1 style="text-align: center; padding:50px;">Table Latihan Anisa Fadilah</h1>
    {{-- <p class="text-center text-secondary">{{$saya}}</p>
    <p class="text-center text-secondary">{{$kamu}}</p>
    <p class="text-center text-secondary">{{$dia}}</p> --}}

    <div class="p-5">
      <a href="{{ route ('user.add') }}" class="btn btn-success mb-3">Add Data</a>
    <table class="table table-hover table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No.Telp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $no =1;?>
            @foreach ($user as $item)
            <tr>
        <th scope="row">{{$no++}}</th>
            <td> {{$item->nama_user}}</td>
            <td> {{$item->email}}</td>
            <td> {{$item->jekel}}</td>      
           @if ($item->nohp == null)
               <td class="text-danger"><i>No Hp belum ditambahkan</i></td>
           @else
            <td> {{$item->nohp}}</td>
            @endif
            <td> {{$item->alamat}}</td>
            <td>
            <a href="{{ route ('user.edit', ['id_user' => $item->id_user]) }}" class="btn btn-success">Edit</a>
            <button onclick="hapus ({{ $item->id_user}})"class="btn btn-success">Delete</button>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function hapus(id_user){

      console.log(id_user);

    if ( confirm ('Anda yakin ingin menghapus data?')){
      $.ajax({
        type : "get",
        url : " {{ route ('user.hapus')}}/" +id_user,
        data : {
          "id_user": id_user
        },
        success: function(response){
        window.location.reload();
        }
      });
    }
  }
  </script>

</body>
</html>