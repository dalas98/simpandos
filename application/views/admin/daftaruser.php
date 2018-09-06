 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Daftar User</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Daftar User</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <?php date_default_timezone_set('Asia/Jakarta'); date_default_timezone_set("Asia/Jakarta"); $jam  =  date("H:i:s");  ?>
            <h4 class="text-success"><i class="ft-calendar"> <?php echo date('d-m-Y') ?> </i></h4>&nbsp; &nbsp; &nbsp;
            <i class="ft-clock text-info  "></i>&nbsp; &nbsp;<h4 class="text-info" id="txt"></h4>         
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Daftar User</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <?php if ($this->session->flashdata('berhasil')):?>
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                      </button>
                      <strong> User Baru Berhasil Ditambahkan !</strong>
                    </div>
                    <?php elseif ($this->session->flashdata('updateberhasil')): ?>
                    <div class="alert alert-info alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                      </button>
                      <strong> User Berhasil di Perbaharui !</strong>
                    </div>
                    <?php elseif ($this->session->flashdata('deleteberhasil')): ?>
                    <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                      </button>
                      <strong> User Berhasil di Hapus !</strong>
                    </div>
                    <?php endif ?>
                    <ul class="nav nav-tabs nav-underline no-hover-bg">
                      <li class="nav-item">
                        <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31"
                        href="#tab31" aria-expanded="true">User PPK</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32"
                        aria-expanded="false">User BMN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab33"
                        aria-expanded="false">User SPM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab33" href="#tab34"
                        aria-expanded="false">User Bendahara</a>
                      </li>
                    </ul>
                    <!-- User PPK -->
                    <div class="tab-content px-1 pt-1">
                      <div role="tabpanel" class="tab-pane active" id="tab31" aria-expanded="true" aria-labelledby="base-tab31">
                      <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>ID PPK</th>
                            <th>Nama PPK</th>
                            <th>Deskripsi</th>
                            <!-- <th>Action</th> -->
                          </tr>
                        </thead>
                        <tbody><!-- 
                          <?php $no = 1; ?>
                          <?php foreach ($data_ppk as $u) { ?> -->
                          <tr>
                            <td class="center"><!-- <?php echo ($no++); ?> --></td>
                            <td><!-- <?php echo $u['id_ppk']; ?> --></td>
                            <td><!-- <?php echo $u['nama_ppk']; ?> --></td>
                            <td><!-- <?php echo $u['keterangan']; ?> --></td>
                            <!-- <td class="right">
                              <a href ="<?php echo base_url()."admin/editppk/".$u['id_ppk']; ?>"><button type="button" class="btn btn-outline-primary mr-1"><i class="fa fa-edit"></i> Edit</button></a>
                              <a href ="<?php echo base_url()."admin/hapusppk/".$u['id_ppk']; ?>" onclick="return confirm('Apa anda yakin ingin menghapus PPK ini?')"><button type="button" class="btn btn-outline-danger mr-1"><i class="fa fa-trash"></i> Hapus</button></a>
                            </td> -->
                          </tr><!-- 
                          <?php } ?> -->
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>ID PPK</th>
                            <th>Nama PPK</th>
                            <th>Deskripsi</th>
                            <!-- <th>Action</th> -->
                          </tr>
                        </tfoot>
                      </table>
                      </div>
                      <!-- End User PPK -->
                      <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
                      </div>
                      <div class="tab-pane" id="tab33" aria-labelledby="base-tab33">
                        <p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
                      </div>
                      <div class="tab-pane" id="tab33" aria-labelledby="base-tab34">
                        <p>Biscuit ice cream halvah candy canes bear claw ice cream
                          cake chocolate bar donut. Toffee cotton candy liquorice.
                          Oat cake lemon drops gingerbread dessert caramels. Sweet
                          dessert jujubes powder sweet sesame snaps.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Zero configuration table -->
      </div>
    </div>
  </div>