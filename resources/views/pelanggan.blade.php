@include ('sidebar')

<div class="p-5 border" style="width: 100%;">
    <h1 class="" style="color: #6AC6ED;">Pelanggan</h1>
    <div class="row p-2 mt-3">
        <div class="col-md-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary rounded-5 text-white" data-bs-toggle="modal" data-bs-target="#myModal" style="width: 240px; height: 100%; background-color: #6AC6ED; border: none;">
                Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" data-bs-backdrop="static" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="POST" action="{{ route('pelanggan.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="telepon">No. Telepon:</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan No. Telepon Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Pelanggan">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row p-2 mt-3">
        <div class="col-12">
            <table class="table table-striped table-bordered border-white" style="width: 100% !important;">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pelanggan as $p)
                    <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->telepon}}</td>
                        <td>{{$p->email}}</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#modalEdit{{ $p->id }}" class="btn btn-warning"><img src="https://img.icons8.com/?size=20&id=69926&format=png&color=ffffff" alt=""></button>
                            <!-- Modal -->
                            <div class="modal fade" data-bs-backdrop="static" id="modalEdit{{ $p->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="POST" action="/pelanggan/{{ $p->id }}/update">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="nama">Nama:</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$p->nama}}" placeholder="Masukkan Nama Pelanggan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat:</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$p->alamat}}" placeholder="Masukkan Alamat Pelanggan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="telepon">No. Telepon:</label>
                                                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{$p->telepon}}" placeholder="Masukkan No. Telepon Pelanggan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{$p->email}}" placeholder="Masukkan Email Pelanggan">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/pelanggan/{{ $p->id }}/delete" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><img src="https://img.icons8.com/?size=20&id=78581&format=png&color=ffffff" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>