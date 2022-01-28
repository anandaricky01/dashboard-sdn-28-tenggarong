<?php 
  
  $data = $_GET['data'];
  $sql_data_guru = "SELECT * FROM `data-guru` WHERE `NO`=$data";
  $query_data_guru = mysqli_query($koneksi, $sql_data_guru);
  while($data_guru = mysqli_fetch_assoc($query_data_guru)){
    $id = $data_guru['NO'];
    $nip = $data_guru['NIP_BARU'];
    $kode = $data_guru['KODE'];
    $nama = $data_guru['NAMA'];
    $jenis_kelamin = $data_guru['JK'];
    $tugas_jabatan = $data_guru['TUGAS_JABATAN'];
    $NIP_LAMA = $data_guru['NIP'];
    $NRG = $data_guru['NRG'];
    $NPWP = $data_guru['NPWP'];
    $NO_REK_BPD = $data_guru['NO_REK_BPD'];
    $TEMPAT_LAHIR = $data_guru['TEMPAT_LAHIR'];
    $TGLLAHIR = $data_guru['TGLLAHIR'];
    $AGAMA = $data_guru['AGAMA'];
    $NKARPEG = $data_guru['NKARPEG'];
    $PKT_AWAL = $data_guru['PKT_AWAL'];
    $GOL = $data_guru['GOL'];
    $TMT_AWAL = $data_guru['TMT_AWAL'];
    $CPNS_TMT = $data_guru['CPNS_TMT'];
    $PNS_TMT = $data_guru['PNS_TMT'];
    $MK_SLRH = $data_guru['MK_SLRH'];
    $MK_GOL = $data_guru['MK_GOL'];
    $PKT_AKHIR = $data_guru['PKT_AKHIR'];
    $TMT_AKHIR = $data_guru['TMT_AKHIR'];
    $PEND = $data_guru['PEND'];
    $TH = $data_guru['TH'];
    $JURUSAN = $data_guru['JURUSAN'];
    $TUGAS_TAMBAHAN = $data_guru['TUGAS_TAMBAHAN'];
    $JJM = $data_guru['JJM'];
    $MENGAJAR = $data_guru['MENGAJAR'];
    $UMUR = $data_guru['UMUR'];
    $GOL_AKHIR = $data_guru['GOL_AKHIR'];
    $NO_SERTIFIKAT = $data_guru['NO_SERTIFIKAT'];
    $TH_SRTF = $data_guru['TH_SRTF'];
    $EMAIL = $data_guru['EMAIL'];
    $TMT_DSNI = $data_guru['TMT_DSNI'];
    $GAJI_POKOK = $data_guru['GAJI_POKOK'];
    $NO_REK_SERTIFIKAT = $data_guru['NO_REK_SERTIFIKAT'];
    $TMT_PNS = $data_guru['TMT_PNS'];
    $NUPTK2 = $data_guru['NUPTK2'];
    $GOL_DRH = $data_guru['GOL_DRH'];
    $STATUS = $data_guru['STATUS'];
    $NAMA_SAJA = $data_guru['NAMA_SAJA'];
    $GELAR_BLK = $data_guru['GELAR_BLK'];
    $HP = $data_guru['HP'];
    $PASS_DAPO = $data_guru['PASS_DAPO'];
    $JAB_GURU_1 = $data_guru['JAB_GURU_1'];
    $JAB_GURU_2 = $data_guru['JAB_GURU_2'];
    $NO_PSRT_4 = $data_guru['NO_PSRT_4'];
    $NO_SKTP_4 = $data_guru['NO_SKTP_4'];
    $FOTO = $data_guru['FOTO'];
  }

?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Guru</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=edit-data-guru&data=<?php echo $id; ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Data Guru</a>
                  <a href="data-guru" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12">
                    <?php if(!empty($_GET['notif'])){ 
                      if($_GET['notif']=="editberhasil"){?>
                        <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                      <?php }?>
                    <?php }?>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="text-center">
                            <img id="foto" class="img-thumbnail mb-4" src="../foto/<?= !empty($FOTO) ? $FOTO : 'kosong.png'; ?>" alt="Foto Guru" width="300px">
                        </div>
                    </div>
                    <div class="col-7">
                        <table class="table table-striped table-bordered mb-3">
                            <thead>
                                <tr>
                                    <td colspan="2"><i class="fas fa-user-circle"></i>  
                                    <strong> Data Guru<strong></td>
                                </tr>
                            </thead>
                            <tbody>   
                                <tr>
                                    <th width="45%" scope="row">Nama</th>
                                    <td><?= $nama; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td><?=$nama; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NIP</th>
                                    <td><?= $nip; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kode Guru</th>
                                    <td><?= $kode; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tugas Jabatan</th>
                                    <td><?= $tugas_jabatan; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td><?= $jenis_kelamin; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <table class="table table-striped table-bordered mb-3">
                  <tbody>               
                      <tr>
                          <th width="45%" scope="row">Nama Saja</th>
                          <td><?=$NAMA_SAJA; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Gelar</th>
                          <td><?= $GELAR_BLK; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Umur</th>
                          <td><?= $UMUR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NIP Lama</th>
                          <td><?= $NIP_LAMA; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NRG</th>
                          <td><?= $NRG; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NPWP</th>
                          <td><?= $NPWP; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NO REK BPD</th>
                          <td><?= $NO_REK_BPD; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Tempat Lahir</th>
                          <td><?= $TEMPAT_LAHIR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Tanggal Lahir</th>
                          <td><?= $TGLLAHIR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Agama</th>
                          <td><?= $AGAMA; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NKARPEG</th>
                          <td><?= $NKARPEG; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">PKT Awal</th>
                          <td><?= $PKT_AWAL; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Gol</th>
                          <td><?= $GOL; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">TMT Awal</th>
                          <td><?= $TMT_AWAL; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">CPNS TMT</th>
                          <td><?= $CPNS_TMT; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">PNS TMT</th>
                          <td><?= $PNS_TMT; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">MK Seluruh</th>
                          <td><?= $MK_SLRH; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">MK Gol</th>
                          <td><?= $MK_GOL; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">PKT Akhir</th>
                          <td><?= $PKT_AKHIR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">TMT Akhir</th>
                          <td><?= $TMT_AKHIR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Pendidikan</th>
                          <td><?= $PEND; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Tahun</th>
                          <td><?= $TH; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Jurusan</th>
                          <td><?= $JURUSAN; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Tugas Tambahan</th>
                          <td><?= $TUGAS_TAMBAHAN; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">JJM</th>
                          <td><?= $JJM; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Mengajar</th>
                          <td><?= $MENGAJAR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Gol Akhir</th>
                          <td><?= $GOL_AKHIR; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">No Sertifikat</th>
                          <td><?= $NO_SERTIFIKAT; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Tahun Sertifikat</th>
                          <td><?= $TH_SRTF; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Email</th>
                          <td><?= $EMAIL; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">TMT Disini</th>
                          <td><?= $TMT_DSNI; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Gaji Pokok</th>
                          <td><?= $GAJI_POKOK; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">No Rek Sertifikat</th>
                          <td><?= $NO_REK_SERTIFIKAT; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">TMT PNS</th>
                          <td><?= $TMT_PNS; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NUPTK2</th>
                          <td><?= $NUPTK2; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Gol Darah</th>
                          <td><?= $GOL_DRH; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Status</th>
                          <td><?= $STATUS; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">No HP</th>
                          <td><?= $HP; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Pass DAPO</th>
                          <td><?= $PASS_DAPO; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Jabatan Guru 1</th>
                          <td><?= $JAB_GURU_1; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">Jabatan Guru 2</th>
                          <td><?= $JAB_GURU_2; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NO PSRT4</th>
                          <td><?= $NO_PSRT_4; ?></td>
                      </tr>
                      <tr>
                          <th scope="row">NO SKTP4</th>
                          <td><?= $NO_SKTP_4; ?></td>
                      </tr>
                  </tbody>
                </table>  

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
   
  
