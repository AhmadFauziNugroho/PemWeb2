<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" >
    <br>

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<h3>
						Belanja Online
					</h3>
					<form role="form">
						<div class="form-group">
							 
                            <label for="nama" class="col-4 col-form-label">Customer</label>
                            <input id="nama" name="nama" placeholder="Nama Curstomer" type="text" class="form-control">
						</div>

						<div class="form-group">
                            <label class="col-4">Pilih Produk</label>
							<div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                        </div>
    
						</div>

                        <div class="form-group">
							 
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
						</div>
						 
						<button type="submit" class="btn btn-primary">
							Kirim
						</button>
					</form>
				</div>
                <div class="col-md-4">
                    <table class="table table-striped"><br><br><br>
                        <thead>
                            <tr class="table-primary">
                                <th>
                                    Daftar Harga
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    TV: 4200000
                                </td>
                            </tr>
                            <tr >
                                <td>
                                    Kulkas: 3100000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mesin Cuci: 3800000
                                </td>
                            </tr>
                            <tr class="table-primary">
                                <td>
                                    Harga Dapat Berubah Setiap Saat
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
	</div>
</div>
</div>
</form>

<?php
error_reporting(0);
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if($produk=='TV' ) $harga = 4200000;
    else if ($produk=='Kulkas') $harga = 3100000;
    else if ($produk=='Mesin Cuci') $harga = 3800000;

    $harga_total = $jumlah * $harga;


    echo '</br>Nama Costumer : '.$nama;
    echo '</br>Produk dipesan : '.$produk;
    echo '</br>Jumlah dipesan : '.$jumlah;
    echo '</br>Harga Satuan : Rp '.$harga;
    echo '</br>Harga Total : Rp '.$harga_total;
?>