@include ('sidebar')
<div class="p-5 border" style="width: 100%;">
    <h1 class="" style="color: #6AC6ED;">Pesanan</h1>
    <div class="row p-2 mt-3">
        <div class="col-md-3">
        <form class="d-flex" role="search" method="GET" action="{{ url('/pesanan-search') }}">
                <input class="form-control me-2 rounded-5" name="search" type="search" placeholder="Search Tanggal Penerimaan" aria-label="Search">
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
                            <form method="POST" action="{{ route('pesanan.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_pelanggan">Nama Pelanggan:</label>
                                    <select class="form-select" name="id_pelanggan" aria-label="Default select example">
                                        @foreach($pelanggan as $u)
                                        <option value="{{$u->id}}">{{$u->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_penerimaan">Tanggal Penerimaan:</label>
                                    <input type="date" class="form-control" id="tanggal_penerimaan" name="tanggal_penerimaan" placeholder="Masukkan Tanggal Penerimaan">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pengambilan">Tanggal Pengambilan:</label>
                                    <input type="date" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" placeholder="Masukkan Tanggal Pengambilan">
                                </div>
                                <div class="form-group">
                                    <label for="status_pesanan">Status Pesanan:</label>
                                    <select class="form-select" id="status_pesanan" name="status_pesanan">
                                        <option value="Proses">Proses</option>
                                        <option value="Done">Done</option>
                                        <option value="Sudah Diambil">Sudah Diambil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan:</label>
                                    <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Masukkan Catatan Pesanan">
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
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Tanggal Penerimaan</th>
                        <th scope="col">Tanggal Pengambilan Item</th>
                        <th scope="col">Status Pesanan</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesanan as $p)
                    <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p['pelanggan']['nama']}}</td>
                        <td>{{$p->tanggal_penerimaan}}</td>
                        <td>{{$p->tanggal_pengambilan}}</td>
                        <td>{{$p->status_pesanan}}</td>
                        <td>{{$p->catatan}}</td>
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
                                            <form method="POST" action="/pesanan/{{ $p->id }}/update">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="nama_pelanggan">Nama Pelanggan:</label>
                                                    <select class="form-select" name="id_pelanggan" aria-label="Default select example">
                                                        @foreach($pelanggan as $u)
                                                        <option value="{{$u->id}}">{{$u->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal_penerimaan">Tanggal Penerimaan:</label>
                                                    <input type="date" class="form-control" id="tanggal_penerimaan" name="tanggal_penerimaan" value="{{$p->tanggal_penerimaan}}" placeholder="Masukkan Tanggal Penerimaan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal_pengambilan">Tanggal Pengambilan:</label>
                                                    <input type="date" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" value="{{$p->tanggal_pengambilan}}" placeholder="Masukkan Tanggal Pengambilan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status_pesanan">Status Pesanan:</label>
                                                    <select class="form-select" id="status_pesanan" name="status_pesanan">
                                                        <option value="Proses">Proses</option>
                                                        <option value="Done">Done</option>
                                                        <option value="Sudah Diambil">Sudah Diambil</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="catatan">Catatan:</label>
                                                    <input type="text" class="form-control" id="catatan" name="catatan" value="{{$p->catatan}}" placeholder="Masukkan Catatan Pesanan">
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
                            <form action="/pesanan/{{ $p->id }}/delete" method="post">
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