<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div class="col-xl-8 order-xl-1">
<div class="card bg-secondary shadow" style = "margin-top:-18%;margin-left:75px; width:800px;">
  <div class="card-header bg-white border-0">
    <div class="row align-items-center">
      <div class="col-8">
        <h3 class="mb-0">Update Project</h3>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form action="<?= base_url('index.php/project/update') ?>" method="post" >
        <div class="pl-lg-4">
        <div class="row">
                    <input type="hidden" name="id_project" value="<?= $data[0]['id_project'] ?>">
                    <input type="hidden" name="id_costumer" value="<?= $_SESSION['id_costumer'] ?>">
            <div class="col-lg-11">
                <div class="form-group">
                    <label class="form-control-label" for="nama_project">Nama Project</label>
                    <input type="text" class="form-control form-control-alternative" name="nama_project" id="nama_project" value="<?= $data[0]['nama_project'] ?>">
                </div>
            </div>
            <div class="col-lg-11">
                <div class="form-group">
                    <label class="form-control-label" for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control form-control-alternative" name="deskripsi" id="deskripsi" value="<?= $data[0]['deskripsi'] ?>">
                </div>
            </div>
            <div class="col-lg-11">
                <div class="form-group">
                    <label class="form-control-label" for="batas_pengerjaan">Batas Pengerjaan</label>
                    <input type="text" class="form-control form-control-alternative" name="batas_pengerjaan" id="batas_pengerjaan" value="<?= $data[0]['batas_pengerjaan'] ?>">
                </div>
            </div>
            <div class="col-lg-11">
                <div class="form-group">
                    <label class="form-control-label" for="batas_pengerjaan">Batas Pengerjaan</label>
                    <input type="text" class="form-control form-control-alternative" name="budget" value="<?= $data[0]['budget'] ?>">
                </div>
            </div>
            <div class="col-lg-11">
                <div class="form-group">
                    <label class="form-control-label" for="batas_pengerjaan">Batas Pengerjaan</label>
                    <input type="text" class="form-control form-control-alternative" name="status" value="<?= $data[0]['status'] ?>">
                </div>
            </div>
            <div class="col-lg-11">
                <div class="form-group">
                    <button type="submit"  class="btn btn-info" style="width : 100%; margin-top:20px;">UPDATE</button>
                </div>
            </div>
    </form>