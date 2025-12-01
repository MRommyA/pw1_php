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

  </style>
</head>

<body>
  
    <?php
    require_once 'controller.php';
    $prestasi = new Prestasi();
    $datas = $prestasi->getAllPrestasi();
    $i = 1;
    foreach ($datas as $data) {
    ?>
      <table border="1">
        <tr>
          <th>NO.</th>
          <th>NPM</th>
          <th>Nama</th>
          <th>prestasi</th>
          <th>Tahun prestasi</th>
        </tr>
        <tr>
          <td><?php echo $i++?></td>
          <td><?php echo $data['npm']; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['nama_prestasi']; ?></td>
          <td><?php echo $data['tahun_prestasi']; ?></td>
        </tr>
      </table>
    <?php
    }
    ?>
  
</body>

</html>