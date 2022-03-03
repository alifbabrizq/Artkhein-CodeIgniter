<style>
	.content {
		min-height: 500px;
		overflow: auto;
	}

	.footer {
		background-color: #ccc;
		min-height: 50px;
	}

	.header {
		background-color: #eee;
		min-height: 50px;
		text-align: center;
	}

	.logo img {
		width: 200px;
	}

	.menu ul {
		padding: 0;
	}

	.menu ul li {
		display: inline-block;
	}

	.menu ul li a {
		padding: 10px 20px;
		text-decoration: none;
	}

	.thumbnail {
		background-color: white;
		text-align: center;
		padding: 10px;
		width: 225px;
		margin: 10px;
		float: left;
	}

	.thumbnail img {
		width: 100%;
	}

</style>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div style="position:absolute;" class="container-fluid mt--7">


	<div class="content">
		<?php foreach ($project as $p ) : ?>
			<div class="thumbnail">
			<input type="hidden" name="id_costumer" value="<?= $p->id_costumer;?>">
			<img src="http://via.placeholder.com/250x150">
			<h2><?= $p->nama_project ?></h2>
			<p style="white-space: nowrap; width: 90%; overflow: hidden; text-overflow: ellipsis;"><b>Des :</b>
				<?= $p->deskripsi ?></p>
			<p style="white-space: nowrap; width: 90%; overflow: hidden; text-overflow: ellipsis; margin-top:-20px">
				<b>Budget : </b> Rp.<?= $p->budget ?>,-</p>
			<a href="" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a>
			<a href="<?php echo base_url(); ?>index.php/Project_bid/store/<?=$p->id_project?>/<?=$p->id_costumer?>"
				class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i>Place Bid</a>
			<!-- <a href="<?= base_url('index.php/Project_bid/harga/') . $p->id_project ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i>Place Bid</a> -->
			<!-- <button type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i> Place Bid</button> -->

		</div>
		

		<?php endforeach; ?>

	</div>
</div>
