<link rel="stylesheet" href="css_data_barang.css">
<div class="atur">
    <div class="edit">
        <h3> Tambah Barang </h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label class="label1">Kode Barang</label></td>
                    <td class="titik"> <input type="text" name="kode_barang"> </td>
                </tr>
                <tr>
                    <td><label class="label1">Nama Barang</label></td>
                    <td class="titik"> <input type="text" name="nama_barang"> </td>
                </tr>
                <tr>
                    <td><label class="label1">Harga Barang</label></td>
                    <td class="titik"> <input type="text" name="harga_barang"> </td>
                </tr>
                <tr>
                    <td><label class="label1">Deskripsi Barang</label></td>
                    <td class="titik"> <input type="text" name="deskripsi"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="proses" value="Simpan" class="simpan"> </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<div class="komen">
    <?php
    include "koneksi.php";

    if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into barang set  
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = '$_POST[harga_barang]',
    deskripsi = '$_POST[deskripsi]'");

    echo "Data barang baru telah tersimpan";

    }

    ?>
</div>
