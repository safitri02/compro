<?php 
include '../koneksi.php';


if (isset($_POST["simpan"])) {
    $kj= $_POST["kode_jurusan"];
    $kode= $_POST["jurusan"];

    $sql= mysqli_query($koneksi, "INSERT INTO tb_jurusan VALUES ('', '$kj', '$kode') ");
    
    if ($sql) {
       echo "
      <script>
      alert('Jurusan Berhasil Ditambah');
       header('location:index.php?menu=jurusan');
      </script>
      ";
    } else{
      echo "
      <script>
      alert('Jurusan Gagal Ditambahkan');
      </script>
      ";
    }
}

?>

<h1 class="h3 mb-4 text-gray-800">Halaman Jurusan</h1>

<?php 
  $query= "SELECT max(kode_jurusan) as maxKode FROM tb_jurusan";
  $hasil= mysqli_query($koneksi, $query);
  $data= mysqli_fetch_array($hasil);
  $kode_kat= $data['maxKode'];
  $nourut= (int) substr($kode_kat, 5,5);
  $nourut++;
  $char= "KJ";
  $kode= $char.sprintf("%04s", $nourut);
  ?>

<div class="content-wrapper">
            <div class="row" class="mt-3">
              <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Tambah Jurusan </h4>
                        <form class="forms-sample" action="" method="post">
                          <div class="form-group">
                            <label for="kode_jurusan">Kode Jurusan</label>
                            <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" readonly=""
                            value="<?php echo $kode ?>" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="jurusan">Masukkan Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukan Jurusan Baru" autocomplete="off" required>
                          </div>
                          <button type="submit" class="btn btn-success mr-2" name="simpan">Tambah Jurusan</button>
                        </form>
                      </div>
                    </div>
                  </div>


              <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Jurusan</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Jurusan</th>
                          <th>Jurusan </th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                    <?php $result= mysqli_query($koneksi, "SELECT * FROM tb_jurusan "); ?>
                  <?php while ($data= mysqli_fetch_assoc($result)) : ?>
                      <tbody>
                        <tr>
                          <td> <?= $no++ ?> </td>
                          <td> <?= $data["kode_jurusan"]; ?> </td>
                          <td> <?= $data["jurusan"]; ?> </td>
                        <td>
                            <a href="index2.php?menu=edit_jurusan&id_jurusan= <?= $data["id_jurusan"]; ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>

                            <a href="index2.php?menu=hapus_jurusan&id_jurusan= <?= $data["id_jurusan"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
                          </td>
                        </tr>
                  <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      