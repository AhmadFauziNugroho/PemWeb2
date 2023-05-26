<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="result1.php">
  <br>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktiku,</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>