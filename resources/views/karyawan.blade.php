<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acheron Laundry Express</title>
    <link rel="stylesheet" href="admin-styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/images/acheron.png" type="image/x-icon">
</head>

<body>
    <div class="p-5 border" style="width: 100%;">
        <h1 class="" style="color: #6AC6ED;">Karyawan</h1>
        <div class="row p-2 mt-3">
            <div class="col-12">
                <table class="table table-striped table-bordered border-white" style="width: 100% !important;">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Tanggal Pesanan</th>
                            <th scope="col">Tanggal Pengambilan Item</th>
                            <th scope="col">Status Pesanan</th>
                            <th scope="col">Catatan</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>