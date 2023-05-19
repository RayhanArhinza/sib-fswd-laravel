
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-+iM4FfyV7L4LsXLsV7YLL/bOZrNpZRL+p+tNvG8Wjb79lgJaBkaiai/E0AxoLXO" crossorigin="anonymous"></script>
    <!-- MDB -->
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white;">Data Pengguna</a>
    </div>
</nav>
<section>
    <div class="container mt-3">
        <!-- Insert Data -->
        <div class="row mt-2">
            <div class="col">
                <form method="GET">
                    <div class="row">
                        <div class="col">
                        <button type="button" class="btn btn-info float-end mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-lg"></i>&nbsp;Tambah</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- Modal Edit -->
        <div class="row">
            <div class="col">
                <div id="editModal" class="card" style="display: none;">
                    <div class="card-header">
                        <h3 class="card-title text-center">Edit Data</h3>
                    </div>
                    <div class="card-body">
                        <form method="" action="" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="editId">
                            <div class="mb-3">
                                <label for="editNama" class="form-label">Nama:</label>
                                <input type="text" name="nama" id="editNama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="editPekerjaan" class="form-label">Role:</label>
                                <select name="pekerjaan" id="editPekerjaan" class="form-select">
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="editEmail" class="form-label">Email:</label>
                                <input type="text" name="email" id="editEmail" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="editPass" class="form-label">Password:</label>
                                <input type="text" name="pass" id="editPass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="editTelp" class="form-label">Telepon:</label>
                                <input type="text" name="telp" id="editTelp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="editAlamat" class="form-label">Alamat:</label>
                                <input type="text" name="alamat" id="editAlamat" class="form-control">
                            </div>
                            <div class="input-group">
                                <label for="editAvatar" class="form-label">Avatar:</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="editAvatar" name="avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="closeModal()">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Detail -->
        <div class="row">
            <div class="col">
                <div id="detailModal" class="card" style="display: none;" enctype="multipart/form-data">
                    <div class="card-header">
                        <h3 class="card-title text-center">Detail Data</h3>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="view.php">
                            <input type="hidden" name="id" id="detailId">
                            <div class="mb-3">
                                <label for="detailNama" class="form-label">Nama:</label>
                                <input type="text" name="nama" id="detailNama" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="detailPekerjaan" class="form-label">Role:</label>
                                <select name="pekerjaan" id="detailPekerjaan" class="form-select">
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="detailEmail" class="form-label">Email:</label>
                                <input type="text" name="email" id="detailEmail" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="detailPass" class="form-label">Pass:</label>
                                <input type="text" name="pass" id="detailPass" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="detailTelp" class="form-label">Telepon:</label>
                                <input type="text" name="telp" id="detailTelp" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="detailAlamat" class="form-label">Alamat:</label>
                                <input type="text" name="alamat" id="detailAlamat" class="form-control" readonly>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="closeModal2()">Close</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- Table -->
        <div class="row mt-3">
            <div class="col">
                <div class="table-responsive ">
                    <table class="table text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>No.</th>
                                <th>Avatar</th>
                                <th style="display: none;">Id</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Alamat Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://img2.pngdownload.id/20180714/hxu/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f52aa71.9002514115315676633386.jpg" alt="avatar" style="width: 50px; height: 50px;"></td>
                                <td>Rayhan Saneval</td>
                                <td>Admin</td>
                                <td>rayhan@mail.com</td>
                                <td>01234567891</td>
                                <td>Surabaya</td>
                                <td>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-warning" onclick="openModalEdit()">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="openModalDetail()">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="https://img2.pngdownload.id/20180714/hxu/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f52aa71.9002514115315676633386.jpg" alt="avatar" style="width: 50px; height: 50px;"></td>
                                <td>arhinza</td>
                                <td>Admin</td>
                                <td>arhinza@mail.com</td>
                                <td>01234567891</td>
                                <td>Surabaya</td>
                                <td>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-warning" onclick="openModalEdit()">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="openModalDetail()">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="https://img2.pngdownload.id/20180714/hxu/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f52aa71.9002514115315676633386.jpg" alt="avatar" style="width: 50px; height: 50px;"></td>
                                <td>Putra</td>
                                <td>Admin</td>
                                <td>putra@mail.com</td>
                                <td>01234567891</td>
                                <td>Surabaya</td>
                                <td>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-warning" onclick="openModalEdit()">Edit</button>
                                    <button type="button" class="btn btn-primary" onclick="openModalDetail()">Detail</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Modal Insert Data-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="insert.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Role</label>
                                <select class="form-select" aria-label="Default select example" name="pekerjaan">
                                    <option selected value="">role</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="text" class="form-control" id="pass" name="pass" required>
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">Telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="input-group">
                                <label for="avatar" class="form-label">Avatar: (ukuran wajib 512x512, maks 80kb)</label>
                            </div>
                            <div class="input-group mb-3">
                                <input for="avatar" type="file" class="form-control" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" value="Submit" class="btn btn-success" name="submit" id="submit">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function openModalEdit() {
        document.getElementById("editModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("editModal").style.display = "none";
    }
    function openModalDetail() {
        document.getElementById("detailModal").style.display = "block";
    }

    function closeModal2() {
        // Menyembunyikan modal
        document.getElementById("detailModal").style.display = "none";
    }
</script>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-+iM4FfyV7L4LsXLsV7YLL/bOZrNpZRL+p+tNvG8Wjb79lgJaBkaiai/E0AxoLXO" crossorigin="anonymous"></script>
</body>
</html>