<DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
   {{session('sukses')}}
</div>
    @endif
        <div class="row">
            <div class="col-6">
            <h1>DATA MAHASISWA</h1>
        </div>
    
   
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>NAMA LENGKAP</th>
            <th>AKSI</th>
        </tr>
  @foreach($data_mahasiswa as $mahasiswa)
        <tr>
            <td>{{$mahasiswa->id}}</td>
            <td>{{$mahasiswa->nim}}</td>
            <td>{{$mahasiswa->nama}}</td>
               <td>
                <a href="/mahasiswa/{{$mahasiswa->id}}/detail" class="btn btn-info btn-sm">detail</a>
                <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data? ">delete</a>
                </td>
        </tr>

        @endforeach
        </table>

        </div>
    </div>

                <div class="col-6">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  +Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
     <form action="/mahasiswa/create" method="POST">
     {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputID">ID</label>
    <input name="id" type="text" class="form-control" id="exampleInputID" aria-describedby="emailHelp" placeholder="ID">
    </div>
    
  <div class="form-group">
    <label for="exampleInputNIM1">NIM</label>
    <input name="nim" type="text" class="form-control" id="exampleInputNIM1" placeholder="NIM">
  </div>

  <div class="form-group">
    <label for="exampleInputNAMA_LENGKAP">NAMA LENGKAP</label>
    <input name="NAMA LENGKAP" type="text" class="form-control" id="exampleInputNAMA_\LENGKAP" placeholder="NAMA LENGKAP">
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
