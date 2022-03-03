<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

<div class="col-xl-8 order-xl-1">
<div class="card bg-secondary shadow" style = "margin-top:-4%;margin-left:75px; width:800px;">
  <div class="card-header bg-white border-0">
    <div class="row align-items-center">
      <div class="col-8">
        <h3 class="mb-0">Harga Bid</h3>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form action="<?php echo base_url();?>index.php/Project_bid/add_project_bid/<?= $id ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_project" value="<?php echo $this->uri->segment('3'); ?>">    
    <input type="hidden" name="id_costumer" value="<?php echo $this->uri->segment('4'); ?>">    
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-11">
                <div class="form-group">
					<label class="form-control-label" for="harga">Harga</label>
					<input  type="text" class="form-control form-control-alternative" name="harga" id="harga" placeholder="Masukkan Harga">
                </div>
			</div>
			<div class="col-lg-11">
                <div class="form-group">
					<input class="btn btn-info" style="" type="submit" name="submit" value="Place Bid">
                </div>
            </div>
    </form>