<div class="card">
    <div class="card-body">
        <div class="card-sub">
        </div>
        <table  class="table table-bordered"  border="1" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nis</th>
                <th>Pelanggaran</th>
                <th>Bobot Pelanggaran</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach($penilaian as $p): ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $p->siswa->nama;  ?></td>
                    <td><?php echo $p->siswa->nis;  ?></td>
                    <td><?php echo $p->pelanggaran->nama;  ?></td>
                    <td><?php echo $p->pelanggaran->bobot;  ?></td>
                    <td><?php echo $p->keterangan;  ?></td>
<?php $no++; ?>
<?php  endforeach;  ?>
            </tbody>
          </table>
</body>
</html>