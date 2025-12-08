<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        body {
            font-family: "Segoe UI", system-ui, sans-serif;
            background-color: #f3f6fc;
            padding: 40px;
        }

        .form-container {
            max-width: 420px;
            background: white;
            padding: 28px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 12px 20px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            color: #1e40af;
            margin-bottom: 20px;
        }

        a.back {
            display: inline-block;
            margin-bottom: 12px;
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
        }

        a.back:hover {
            text-decoration: underline;
        }

        label {
            font-weight: 600;
            font-size: 13px;
            color: #444;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            border-radius: 6px;
            border: 1px solid #dbeafe;
            background: #f8fafc;
            transition: 0.2s;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
            background: #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
            border: none;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.15s;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #16a34a, #15803d);
        }

        br {
            display: none;
        }
</style>

</head>
<body>
    
    <?php
        require_once 'controller.php'; 
        $prestasi = new Prestasi(); 
        $datas = $prestasi->getPrestasiById($_GET['id']); 
        foreach ($datas as $data) { 
    ?>

    
    <div class="form-container">
        <a href="index.php" class="back">← Kembali</a>

        <h2>Update Data Prestasi</h2>

        <form method="POST">
            <label for="npm">NPM</label>
            <input type="text" id="npm" name="npm" required value="<?= $data['npm'] ?>">

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required value="<?= $data['nama'] ?>">

            <label for="nama_prestasi">Nama Prestasi</label>
            <input type="text" id="nama_prestasi" name="nama_prestasi" required value="<?= $data['nama_prestasi'] ?>">

            <label for="tahun_prestasi">Tahun Prestasi</label>
            <input type="number" id="tahun_prestasi" name="tahun_prestasi" required value="<?= $data['tahun_prestasi'] ?>">

            <input type="submit" value="Update Data">
        </form>
    </div>
    <?php
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $prestasi = new Prestasi();

            $prestasi->updatePrestasi($id, [
                'npm' => $_POST['npm'], 
                'nama' => $_POST['nama'], 
                'nama_prestasi' => $_POST['nama_prestasi'], 
                'tahun_prestasi' => $_POST['tahun_prestasi'] 
            ]);

            header('Refresh:0; url=index.php');
        }
    ?>
</body>
</html>