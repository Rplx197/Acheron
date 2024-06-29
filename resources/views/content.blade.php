@include ('sidebar')

<div class="p-5 border" style="width: 100%;">
    <h1 class="" style="color: #6AC6ED;">Content</h1>
    <div class="row p-2 mt-3">
        <div class="col-12">
            <table class="table table-striped table-bordered border-white" style="width: 100% !important; color: #6AC6ED;">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi 1</th>
                        <th scope="col">Deskripsi 2</th>
                        <th scope="col">Deskripsi 3</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $c)
                    <tr>
                        <th scope="row">{{$c->judul}}</th>
                        <td>{{$c->desc1}}</td>
                        <td>{{$c->desc2}}</td>
                        <td>{{$c->desc3}}</td>
                        <td>{{$c->harga}}</td>
                        <td>{{$c->icon}}</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#modalEdit{{ $c->id }}" class="btn btn-warning"><img src="https://img.icons8.com/?size=20&id=69926&format=png&color=ffffff" alt=""></button>
                            <!-- Modal -->
                            <div class="modal fade" data-bs-backdrop="static" id="modalEdit{{ $c->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data</h4>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form method="POST" action="/content/{{ $c->id }}/update">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="judul">Judul:</label>
                                                    <input type="text" class="form-control" id="judul" name="judul" value="{{$c->judul}}" placeholder="Masukkan Judul Content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="desc3">Deskripsi 3:</label>
                                                    <input type="text" class="form-control" id="desc3" name="desc3" value="{{$c->desc3}}" placeholder="Masukkan Deskripsi Content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="desc2">Deskripsi 2:</label>
                                                    <input type="text" class="form-control" id="desc2" name="desc2" value="{{$c->desc2}}" placeholder="Masukkan Deskripsi Content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="desc1">Deskripsi 1:</label>
                                                    <input type="text" class="form-control" id="desc1" name="desc1" value="{{$c->desc1}}" placeholder="Masukkan Deskripsi Content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga:</label>
                                                    <input type="harga" class="form-control" id="harga" name="harga" value="{{$c->harga}}" placeholder="Masukkan Harga Content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="icon">Icon:</label>
                                                    <input type="icon" class="form-control" id="icon" name="icon" value="{{$c->icon}}" placeholder="Masukkan Nama Icon">
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