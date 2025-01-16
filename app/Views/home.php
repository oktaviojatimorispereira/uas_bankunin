<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Home Page | Bankunin</title>

    <link rel="canonical" href="<?= base_url('assets/docs/4.0/examples/dashboard/') ?>">
    <link rel="canonical" href="<?= base_url('assets/docs/4.0/examples/checkout') ?>">
    <link rel="canonical" href="<?= base_url('assets/docs/4.0/examples/pricing/') ?>">
    <link rel="canonical" href="<?= base_url('assets/docs/4.0/examples/carousel/') ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/docs/4.0/examples/dashboard/dashboard.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/docs/4.0/examples/checkout/form-validation.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/docs/4.0/examples/pricing/pricing.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/docs/4.0/examples/carousel/carousel.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="ml-5">
        <div class="ml-5">
            <div class="ml-5">
                <div class="ml-5">
                    <div class="ml-5">
                        <div class="ml-5 mr-2 mt-2">

                            <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0">
                                <input class="form-control form-control-dark w-70" type="text" placeholder="Cari yang kamu cari disini..." aria-label="Search">
                                <button type="button" class="btn btn-outline-secondary ml-2">
                                    <span data-feather="bell"></span>
                                </button>

                                <a href="" class=" col-md-1 ml-2 btn btn-sm btn-md btn-lg btn-outline-primary">
                                    Login
                                </a>

                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <img class="" src="<?= base_url('assets/assets/img/logo_bank.png') ?>" alt="" width="200" height="200">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Menu Utama <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Riwayat Transaksi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="heart"></span>
                                Rekening Abang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="settings"></span>
                                Pengaturan
                            </a>
                        </li>
                    </ul>

                    <ul class="nav flex-column mb-2 mt-5">

                        <li class="nav-item mt-5">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Bantuan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">


                <div class="container col-md-4 col-lg-4 mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>REKENING ABANG</h4>
                        </div>
                    </div>

                    <div class="card text-white bg-secondary mb-3" style="max-width: 60rem;">
                        <div class="card-body">
                            <h4 class="card-title text-center">Rekening Abang Belum Tersedia</h4>
                            <p class="card-text text-center">Daftar dan Buka Rekening Abang Sekarang</p>
                        </div>
                    </div>

                </div>


        </div>
        <div class="container">

            <div class="row mt-4">
                <div class="col-md-4 order-md-2 mb-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Pengeluaranmu</h5>
                            <p class="card-text">-</p>

                            <div class="card text-white bg-secondary mb-3 text-right" style="max-width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Rp 0,00</h5>
                                    <p class="card-text">Akun Abang</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Kalkulasi Jajan</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="" class="btn btn-secondary">Gunakan</a>
                                </div>
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Pengeluaran Abang</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="badge badge-info">Rp 0,00</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Pemasukkan</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="badge badge-info">Rp 0,00</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Manfaat Tabungan</p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="badge badge-info">Rp 0,00</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                </div>

                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Riwayat Bayar Abang</h4>
                    <form class="needs-validation" novalidate>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Nominal</th>
                                        <th>Uraian</th>
                                        <th>Saldo Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>- </td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <h5 class="card-title">Rp 0,00</h5>

                                            </div>
                                            <div class="col-md-5">
                                                <h3 class="card-text">0 %</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="card-title mt-3 mb-3">TOTAL HEMAT ABANG</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2025 VBankunin</p>
            </footer>
        </div>


        </main>
    </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
</body>

</html>