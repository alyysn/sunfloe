<!-- Gallery Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Gallery</p>
			<h1 class="mb-5"></h1>
		</div>

		<div class="row g-0">
			<?php foreach ($galery as $yoo) { ?>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="row g-0">
					<div class="col-lg-10 sm-6 mb-2">
						<a class="d-block" href="<?= base_url('assets/upload/galeri/'.$yoo['foto'])?>"
							data-lightbox="gallery">
							<img class="img-fluid" src="<?= base_url('assets/upload/galeri/'.$yoo['foto'])?>" alt="">
						</a>

					</div>
				</div>
			</div>
			<?php  } ?>
		</div>


        
        
	</div>
</div>


<!-- Gallery End -->
