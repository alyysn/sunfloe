 <!-- Contact Start -->

 <div class="container-xxl py-5">
 	<div class="container">
 		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
 			<h1 class="mb-5">Hubungi Kami </h1>
 		</div>
 		<div class="row g-5">
 			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
 				<div id="hilang">
 					<?= $this->session->flashdata('alert')?>
 				</div>

 				<h3 class="mb-4">Kirim Surel</h3>
 				<p class="mb-4">ingin memberi kritik/saran, atau ingin tahu lebih lanjut tentang saya? isi form
 					disamping ya! <br>
 					email=<a href="<?= $konfig->email; ?>">avvalyy@gmail.com</a>.</p>
 				<form action="<?= base_url('beranda/saran')?>" method="post">
 					<div class="row g-3">
 						<div class="col-md-6">
 							<div class="form-floating">
 								<input type="text" class="form-control" id="name" placeholder="Your Name" name="nama">
 								<label for="name">Your Name</label>
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="form-floating">
 								<input type="email" class="form-control" id="email" placeholder="Your Email"
 									name="email">
 								<label for="email">Your Email</label>
 							</div>
 						</div>
 						<div class="col-12">
 							<div class="form-floating">
 								<textarea class="form-control" placeholder="Leave a message here" id="message"
 									style="height: 250px" name="isi_saran"></textarea>
 								<label for="message">Message</label>
 							</div>
 						</div>
 						<div class="col-12">
 							<button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send
 								Message</button>
 						</div>
 					</div>
 				</form>
 			</div>
 			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
 				<img class="img-fluid rounded" src="<?= base_url('assets/depan/img/contact.jpg')?>" alt="">
 			</div>
 		</div>
 	</div>
 </div>
 <!-- Contact End -->
