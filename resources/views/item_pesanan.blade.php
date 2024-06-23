@include ('sidebar')
<div class="p-5 border" style="width: 100%;">
    <h1 class="" style="color: #6AC6ED;">Item Pesanan</h1>
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
                            <form method="POST" action="{{ route('item_pesanan.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="id_pesanan">ID Pesanan:</label>
                                    <select class="form-select" name="id_pesanan" aria-label="Default select example">
                                        @foreach($pesanan as $p)
                                        <option value="{{$p->id}}">{{$p->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_layanan">Jenis Layanan:</label>
                                    <input type="text" class="form-control" id="jenis_layanan" name="jenis_layanan" placeholder="Masukkan Jenis Layanan">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_item">Jumlah Item:</label>
                                    <input type="text" class="form-control" id="jumlah_item" name="jumlah_item" placeholder="Masukkan Jumlah Item">
                                </div>
                                <div class="form-group">
                                    <label for="harga_per_item">Harga Per Item:</label>
                                    <input type="text" class="form-control" id="harga_per_item" name="harga_per_item" placeholder="Masukkan Harga Per Item">
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
                        <th scope="col">ID Pesanan</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Jumlah Item</th>
                        <th scope="col">Harga per Item</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item_pesanan as $i)
                    <tr>
                        <th scope="row">{{$i->id}}</th>
                        <td>{{$i['pesanan']['id']}}</td>
                        <td>{{$i->jenis_layanan}}</td>
                        <td>{{$i->jumlah_item}}</td>
                        <td>{{$i->harga_per_item}}</td>
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
                                            <form method="POST" action="/item_pesanan/{{ $p->id }}/update">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="id_pesanan">ID Pesanan:</label>
                                                    <select class="form-select" name="id_pesanan" aria-label="Default select example">
                                                        @foreach($pesanan as $p)
                                                        <option value="{{$p->id}}">{{$p->id}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_layanan">Jenis Layanan:</label>
                                                    <input type="text" class="form-control" id="jenis_layanan" name="jenis_layanan" value="{{$i->jenis_layanan}}" placeholder="Masukkan Jenis Layanan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah_item">Jumlah Item:</label>
                                                    <input type="text" class="form-control" id="jumlah_item" name="jumlah_item" value="{{$i->jumlah_item}}" placeholder="Masukkan Jumlah Item">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_per_item">Harga Per Item:</label>
                                                    <input type="text" class="form-control" id="harga_per_item" name="harga_per_item" value="{{$i->harga_per_item}}" placeholder="Masukkan Harga Per Item">
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
                            <form action="/item_pesanan/{{ $i->id }}/delete" method="post">
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