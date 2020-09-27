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
<div class="modal fade" id="modaltambahdata" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4" Style="border-right:1px solid;">
                        <form action="<?php echo base_url('unitkerja/add') ?>" method="post">
                            <div class="form-group row">
                                <label>Kode Unit Kerja</label>
                                <input type="text" class="form-control" name="kode" placeholder="Kode Unit Kerja">
                            </div>
                            <div class="form-group row">
                                <label>Nama Unit Kerja</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Unit Kerja">
                            </div>
                            <div class="form-group row">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group row">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan">
                            </div>
                            <div class="form-group row">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                            </div>
                            <div class="form-group row">
                                <label>Kabupaten/Kota</label>
                                <input type="text" class="form-control" name="kota" placeholder="Kabupaten/Kota">
                            </div>
                            <div class="form-group row">
                                <label>Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                            </div>
                            <div class="form-group row">
                                <label>Negara</label>
                                <input type="text" class="form-control" name="negara" placeholder="Negara">
                            </div>
                            <div class="form-group row">
                                <label>Kode Pos</label>
                                <input type="text" class="form-control" name="kodePos" placeholder="Kode Pos">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Simpan" />
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Keluar
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-7">
                        <table class="table table-bordered dataTable">
                            <tr>
                                <th>No</th>
                                <th>Kode BC</th>
                                <th>No</th>
                                <th>Kode BC</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>