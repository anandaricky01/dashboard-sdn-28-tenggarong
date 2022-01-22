<?php 
    $sql_data_guru = "SELECT * FROM `data-guru`";
    $query = mysqli_query($koneksi, $sql_data_guru);
    while ($data = mysqli_fetch_assoc($query)) {
        $id = $data['NO'];
        $nip = $data['NIP_BARU'];
        $kode = $data['KODE'];
        $nama = $data['NAMA'];
        $jenis_kelamin = $data['JK'];
        $tugas_jabatan = $data['TUGAS_JABATAN'];
        $NIP_LAMA = $data['NIP'];
        $NRG = $data['NRG'];
        $NPWP = $data['NPWP'];
        $NO_REK_BPD = $data['NO_REK_BPD'];
        $TEMPAT_LAHIR = $data['TEMPAT_LAHIR'];
        $TGLLAHIR = $data['TGLLAHIR'];
        $AGAMA = $data['AGAMA'];
        $NKARPEG = $data['NKARPEG'];
        $PKT_AWAL = $data['PKT_AWAL'];
        $GOL = $data['GOL'];
        $TMT_AWAL = $data['TMT_AWAL'];
        $CPNS_TMT = $data['CPNS_TMT'];
        $PNS_TMT = $data['PNS_TMT'];
        $MK_SLRH = $data['MK_SLRH'];
        $MK_GOL = $data['MK_GOL'];
        $PKT_AKHIR = $data['PKT_AKHIR'];
        $TMT_AKHIR = $data['TMT_AKHIR'];
        $PEND = $data['PEND'];
        $TH = $data['TH'];
        $JURUSAN = $data['JURUSAN'];
        $TUGAS_TAMBAHAN = $data['TUGAS_TAMBAHAN'];
        $JJM = $data['JJM'];
        $MENGAJAR = $data['MENGAJAR'];
        $UMUR = $data['UMUR'];
        $GOL_AKHIR = $data['GOL_AKHIR'];
        $NO_SERTIFIKAT = $data['NO_SERTIFIKAT'];
        $TH_SRTF = $data['TH_SRTF'];
        $EMAIL = $data['EMAIL'];
        $TMT_DSNI = $data['TMT_DSNI'];
        $GAJI_POKOK = $data['GAJI_POKOK'];
        $NO_REK_SERTIFIKAT = $data['NO_REK_SERTIFIKAT'];
        $TMT_PNS = $data['TMT_PNS'];
        $NUPTK2 = $data['NUPTK2'];
        $GOL_DRH = $data['GOL_DRH'];
        $STATUS = $data['STATUS'];
        $NAMA_SAJA = $data['NAMA_SAJA'];
        $GELAR_BLK = $data['GELAR_BLK'];
        $HP = $data['HP'];
        $PASS_DAPO = $data['PASS_DAPO'];
        $JAB_GURU_1 = $data['JAB_GURU_1'];
        $JAB_GURU_2 = $data['JAB_GURU_2'];
        $NO_PSRT_4 = $data['NO_PSRT_4'];
        $NO_SKTP_4 = $data['NO_SKTP_4'];

        
?>
<div class="modal fade" id="Modal<?php echo $id;?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Data Lengkap</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">
            <div class="row">
                <div class="col text-center">
                    <img id="foto" class="img-thumbnail" src="img/img013.jpg" alt="" width="200px">
                </div>
                <div class="col p-2">
                    <div class="container">
                    <table class="table table-striped">
                        <tbody>
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
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="container my-5">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Saja</th>
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
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
<?php } ?>