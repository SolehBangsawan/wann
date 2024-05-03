<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Halaman Produk</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Kode produk</th>
          <th>Nama produk</th>
          <th>Jenis produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $produk = [
          ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat Tulis', 'harga' => 20000],
          ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat Tulis', 'harga' => 15000]
        ];
        
        foreach ($produk as $item) {
          echo "<tr>";
          echo "<td>{$item['kode']}</td>";
          echo "<td>{$item['nama']}</td>";
          echo "<td>{$item['jenis']}</td>";
          echo "<td>{$item['harga']}</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <a href="form_tambah_produk.php" class="btn btn-primary">Tambah Produk</a>
  </div>
</body>
</html>
