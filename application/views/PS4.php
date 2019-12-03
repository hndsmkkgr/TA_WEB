
<div class="home" style="margin-top: 50px">
    <div class="home_container">
      <div class="home_background" style="background-image:url(assets/images/platform.jpg)"></div>
      <div class="home_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title">Find Your Game<span>.</span></div>
                <div class="home_text"><p>Get just the right game to satisfy your boredom.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Home -->
<div class="super_container">

<div class="container-fluid" style="margin-top: 20px">

<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

  <div class="row"style="margin-right: 10px; margin-left: 7rem;">
    <?php foreach ($barang as $brg) : ?> 
      <div class="product">
							<div class="product_image"><img src="<?php echo base_url().'/upload/'.$brg->gambar?>" alt=""></div>
							<div class="product_extra product_new"><a href="<?= base_url()?>detil/<?= $brg->id_brg;?>">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="<?= base_url()?>detil/<?= $brg->id_brg;?>"><?php echo $brg->nama_brg ?></a></div>
								<div class="product_price">Rp. <?php echo $brg->harga; ?></div>
                <br/>
                <?php echo anchor ('platform/keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Add to Cart</div>') ?>

							</div>
						</div>

<!-- 
     <div class="card" style="width: 18rem; margin-right: 25px; margin-bottom: 25px;">
      <a href="<?= base_url()?>detil/<?= $brg->id_brg;?>"class="thumbnail">
      <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="" style ="float:left;  max-height: 13rem;">
      </a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->nama_brg; ?></small><br>
        <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga; ?></span><br>
         <?php echo anchor ('PS4/keranjang/'. $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
      </div>
    </div> -->
  <?php endforeach; ?>
  </div>

        </div>
      </div>
    </div>
  </div>
</div>
      
</div>
</div>

<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(assets/images/offer.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Amazing Offers!</div>
							<div class="avds_text">Check it out!<br/>Only available until December 31, 2019.</div>
							<div class="avds_link avds_xl_link"><a href="<?php echo base_url();?>platform">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <br/>