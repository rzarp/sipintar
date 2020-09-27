<?php $this->load->view("templates/sidebar") ?>
<?php $this->load->view("templates/navbar") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kurir</h1>

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
                    <th>Nama Kurir</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($kurir as $kurir) : ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $kurir->nama ?>
                        </td>
                        <td>
                            #
                        </td>
                        <td>

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kurir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/add') ?>" method="post">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Kurir:</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Kurir">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Action:</label>
            <input type="text" class="form-control" name="npp" placeholder="Action">
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
