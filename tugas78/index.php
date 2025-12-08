

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prestasi Mahasiswa</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      font-family: "Segoe UI", system-ui, sans-serif;
      font-size: 14px;
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0,0,0,0.05);
      border-radius: 8px;
      overflow: hidden;
    }


    th {
      background: linear-gradient(135deg, #2563eb, #1e40af);
      color: white;
      text-align: left;
      padding: 12px 14px;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      font-size: 12px;
    }


    td {
      padding: 10px 14px;
      border-bottom: 1px solid #eee;
    }


    tr:nth-child(even) {
      background-color: #f9fafb;
    }


    tr:hover {
      background-color: #e0ecff;
      transition: 0.2s;
    }


    td.center {
      text-align: center;
    }
    td.right {
      text-align: right;
    }


    caption {
      caption-side: bottom;
      padding: 8px;
      font-size: 12px;
      color: #666;
    }

    a.tambah {
      display: inline-block;
      margin-bottom: 12px;
      padding: 10px 16px;
      background: linear-gradient(135deg, #2563eb, #1d4ed8);
      color: white;
      text-decoration: none;
      font-weight: 600;
      border-radius: 6px;
      box-shadow: 0 4px 10px rgba(37,99,235,0.3);
      transition: 0.2s ease-in-out;
    }

    a.tambah:hover {
      background: linear-gradient(135deg, #1e40af, #1e3a8a);
      transform: translateY(-1px);
    }

    a.action {
      display: inline-block;
      padding: 6px 12px;
      margin: 2px 0;
      text-decoration: none;
      border-radius: 4px;
      font-size: 12px;
      font-weight: 600;
      transition: 0.15s;
    }

    a.update {
      background-color: #22c55e;
      color: white;
    }

    a.update:hover {
      background-color: #16a34a;
    }

    a.delete {
      background-color: #ef4444;
      color: white;
    }

    a.delete:hover {
      background-color: #dc2626;
    }

    td.actions {
      text-align: center;
    }


  </style>
</head>

<body>
    <a href="create.php" class="tambah">Tambah Data</a>
      <table border="1">
        <tr>
          <th>NO.</th>
          <th>NPM</th>
          <th>Nama</th>
          <th>prestasi</th>
          <th>Tahun prestasi</th>
          <th></th>
        </tr>
    <?php
    require_once 'controller.php';
    $prestasi = new Prestasi();
    $datas = $prestasi->getAllPrestasi();
    $i = 1;
    foreach ($datas as $data) {
    ?>
        <tr>
          <td><?php echo $i++?></td>
          <td><?php echo $data['npm']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['nama_prestasi']; ?></td>
          <td><?php echo $data['tahun_prestasi']; ?></td>
          <td class="actions">
            <a class="action update" href="<?= "update.php?id=$data[id]" ?>">Update</a>
            <a class="action delete" href="<?= "delete.php?id=$data[id]" ?>" 
            onclick="return confirm('Yakin mau hapus data ini?')">Delete</a>
          </td>

        </tr>
      
    <?php
    }
    ?>
    </table>
</body>

</html>