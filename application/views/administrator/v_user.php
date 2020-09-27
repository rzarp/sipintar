<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data User</h1>

    <!-- DataTales Example -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="#" data-toggle="modal" data-target="#modaltambahdata" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Print</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Export Excel</a>
        </h6>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-sm table-bordered " style="font-size: small;">
            <thead>
                <tr class="bg-primary text-white">
                    <th>No</th>
                    <th>Asal Unit Kerja</th>
                    <th>Privilege</th>
                    <th>Nama User</th>
                    <th>NPP</th>
                    <th>Posisi Jabatan</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Kode BC</th>
                    <th>Alamat Pengiriman</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($user as $user) : ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $user->asalUK ?>
                        </td>
                        <td>
                            <?php if ($user->role == 1) {
                                echo "Administrator";
                            } else if ($user->role == 2) {
                                echo "Ekspedisi";
                            } else if ($user->role == 3) {
                                echo "User";
                            } ?>
                        </td>
                        <td>
                            <?= $user->username ?>
                        </td>
                        <td>
                            <?= $user->npp ?>
                        </td>
                        <td>
                            <?= $user->posisi ?>
                        </td>
                        <td>
                            <?= $user->email ?>
                        </td>
                        <td>
                            <?= $user->password ?>
                        </td>
                        <td>
                            <?= $user->kodeBC ?>
                        </td>
                        <td>
                            <?= $user->alamat ?>
                        </td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modaleditdata"><span style="color: blue;"><i class="fas fa-edit fa-sm"></i></span></a>
                            <a onclick="deleteConfirm('<?php echo site_url('user/delete/' . $user->npp) ?>')" href="#!"><span style="color: red;"><i class="fas fa-trash fa-sm"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal tambah data -->
<div class="modal fade" id="modaltambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/add') ?>" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Asal Unit Kerja:</label>
            <select class="custom-select mr-sm-2" name="asal" id="asal" onchange="getAsal(this)">
                <?= base_url('user') ?>
                <?php foreach ($unitKerja as $user) : ?>
                <option value="<?= $user->namaUK ?>"><?= $user->namaUK ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Privilege:</label>
            <select class="custom-select mr-sm-2" name="role" id="role">
                <option value="1">Administrator</option>
                <option value="2">Ekspedisi</option>
                <option value="3">User</option>
            </select> 
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama User:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama User">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">NPP:</label>
            <input type="text" class="form-control" name="npp" placeholder="NPP">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Posisi Jabatan:</label>
            <input type="text" class="form-control" name="posisi" placeholder="Posisi Jabatan">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" name="pass" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kode Bc:</label>
            <select class="custom-select mr-sm-2" name="kodebc" id="">
                <?= base_url('user') ?>
                <?php foreach ($kode as $kode) : ?>
                    <option value="<?= $kode->kodeBc ?>"><?= $kode->kodeBc ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat Pengiriman:</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat Pengiriman">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Simpan"/>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    function getAsal(selectObject) {
        var value = selectObject.value;
        console.log(value);
    }
</script>






