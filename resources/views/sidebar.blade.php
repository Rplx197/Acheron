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
    <div class="sidebar d-flex flex-nowrap" style="height: 100vh;">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; background-color: #6AC6ED; color: white;">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-white">
                <img src="assets/images/acheron.png" alt="">
                <span class="fs-4">Acheron</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="pelanggan" class="nav-link {{ Request::is('pelanggan')? "active":"text-white" }}">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Pelanggan
                    </a>
                </li>
                <li>
                    <a href="item_pesanan" class="nav-link {{ Request::is('item_pesanan')? "active":"text-white" }}">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Item Pesanan
                    </a>
                </li>
                <li>
                    <a href="pesanan" class="nav-link {{ Request::is('pesanan')? "active":"text-white" }}">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Pesanan
                    </a>
                </li>
                <li>
                    <a href="transaksi_pembayaran" class="nav-link {{ Request::is('transaksi_pembayaran')? "active":"text-white" }}">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Transaksi Pembayaran
                    </a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link text-white" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
            <hr>
        </div>
        <!-- sidebar -->