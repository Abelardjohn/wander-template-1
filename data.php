<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jumlah Orang</td>
            <td>Ucapan</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM tbl_wishes ORDER BY id DESC";
        $dewan1 = $db1->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();

        if ($res1->num_rows > 0) {
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['name'];
                $jumlah = $row['jumlah'];
                $ucapan = $row['ucapan'];

        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo $ucapan; ?></td>

                </tr>
            <?php }
        } else { ?>
            <tr>
                <td colspan='7'>Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>