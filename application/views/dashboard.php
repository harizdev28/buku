<div class="container">
	<div class="col-lg-12 col-md-6">
		<!-- Carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<!-- <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol> -->
		    <div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url('assets/img/slider1.png') ?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img/slider2.png') ?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img/slider3.jpg') ?>" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>


<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 col-md-6">
        <div class=" flex w-full grow-0 cursor-pointer flex-col justify-center rounded-m py-4 !transition-shadow !duration-200 ease-in-out hover:shadow-2 highlightMenu_swiperSlideDweb__d3kL1" data-testid="highlightMenuContainer#0" style="margin-right: 16px;"><a href="https://www.gramedia.com/promo/buku-baru-andalan-november-2024"><div class="row-0 mb-2 flex w-full justify-center object-contain"><div data-sentry-component="Image" data-sentry-source-file="Image.tsx"><img alt="Buku Baru Andalan" data-testid="highlightMenuImage#0" fetchpriority="high" width="120" height="120" decoding="async" data-nimg="1" class="mx-auto shrink-0 grow-0 object-contain highlightMenu_imageDweb__tu9BD" src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/highlighted_menu/Icon_category_Buku_Baru.png" style="color: transparent;"></div></div><div class="flex w-full justify-center" data-testid="highlightMenuTitle#0"></div></a></div>
            
        </div>
    </div>
</div>

<div class="container">
    

    
		<div class="swiper mt-5">
        <span class="float-left mb-3"><B>Buku Terlaris</B></span>
        <span class="float-right mb-3">Lihat Semua</span>
        
			<div class="swiper-wrapper"> 
                <?php foreach ($buku as $b) : ?> <div class="swiper-slide">
					<div class="col-6 col-sm-4 col-md-3 col-lg-3 d-flex justify-content-center">
						<div class="product-card">
							<img src="
											<?= base_url() . '/uploads/' . $b->gambar ?>" alt="Product 1">
							<h5> <?= $b->judul_buku ?> </h5>
							<!-- <p>
											<?= $b->keterangan ?></p> -->
							<div class="price">Rp. <?= number_format($b->harga, 0, ',', '.')  ?> </div>
							<button class="btn btn-primary btn-sm">Beli</button> <?= anchor('dashboard/detail/' . $b->id_buku, '
											
											<div class="btn btn-success btn-sm">Detail</div>') ?>
						</div>
					</div>
				</div> <?php endforeach; ?> </div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
    <?= $this->session->flashdata('pesan') ?>
    
</div>