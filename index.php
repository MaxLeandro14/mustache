<?php 
   /*
    Template Name: Home
    */
 get_header(); ?>	
		<header class="main">
					<p>Sua <span class="text-tc">Próxima</span> Agência,</p>
					<p class="indent">Seu <span class="text-tc">Próxima</span> Resultado.</p>
		</header>
		<section class="box">
			<h2 class="title-h2">Conteudo Interno</h2>
			<div class="container">
				<div class="row">
				<div class="row">
					<div class="carousell">
					<?php
					$args = array(
					'post_type' => 'post',
				    'orderby' => 'post_date',
					'posts_per_page' => 6
					);
					$query = new WP_Query($args);
					if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					?>
						<div>
							<div class="box-slide">
								<span><?php the_category(); ?></span>
								<?php the_post_thumbnail(); ?>
								<div class="box-alide-cont">
									<h4><?php the_title(); ?></h4>
									<p><?php the_excerpt(); ?></p>
									<button class="btn-slide">Link Externo</button>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
						
						
					  </div>
				</div>
				
					  <div class="row btn-slide-spac ">
							
							<button class="prev-button-slick btn-slide-click">
								<
							</button>
							<div class="slick-slider-dots"></div>
							<button class="next-button-slick btn-slide-click">
								>
							</button>
					  </div>
									
				</div>	
			</div>		
		</section>


		<section class="box-2">
			<h2 class="title-h2">Conteudo Interno 2</h2>
			<div class="container">
				<form action="" method="post" id="subForm">
					<div class="row">

				  <div class="col-md-6">
				  	<div class="col-md-12">
				  		<input class="form-control form-space" type="text" name="nome" placeholder="Seu nome" aria-label="default input example">
				  	</div>
				  	<div class="col-md-12">
				  		<input class="form-control form-space form-space-2" type="email" name="email" placeholder="Seu Email" aria-label="default input example">
				  	</div>
				  	<div class="col-md-12">
				  		<input class="form-control form-space" type="text" data-mask="(00)00000-0000" name="fone" placeholder="Seu Telefone" aria-label="default input example">
				  	</div>
				  	<div class="col-md-12">
				  		<input class="form-control form-space form-space-2" type="text" data-mask="00/00/0000" name="nascimento" placeholder="Sua Data de Nascimento" aria-label="default input example">
				  	</div>
	
					</div>

					<div class="col-md-6">
						<div class="col-md-12">
							<input class="form-control form-space" type="text" id="cep" data-mask="00000-000" name="cep" placeholder="Cep" aria-label="default input example">
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-8">
									<input class="form-control form-space" id="endereco" type="text" name="endereco" placeholder="Endereço" aria-label="default input example">
								</div>
								<div class="col-md-4">
									<input class="form-control form-space" type="text" name="numero" placeholder="Numero" aria-label="default input example">
								</div>							
							</div>
						</div>
						
						<div class="col-md-12">
							<input class="form-control form-space" type="text" id="bairro" name="bairro" placeholder="Bairro" aria-label="default input example">
						</div>
						<div class="col-md-12">
							<div class="row">
							<div class="col-md-8">
								<input class="form-control form-space" type="text" id="cidade" name="cidade" placeholder="Cidade" aria-label="default input example">
							</div>
							<div class="col-md-4">
								<input class="form-control form-space" type="text" id="estado" name="estado" placeholder="Estado" aria-label="default input example">
							</div>							
						</div>
						</div>
						
	
					</div>

				  </div>
				  <div class="row">
						<div class="loading" id="loading" style="display: none;">
							<img src="<?= get_template_directory_uri(); ?>/assets/img/loading.gif" alt="Loading gif">
						</div>
						<div class="msg">
							
						</div>
				  </div>
				  <div class="row">
				     <button type="submit" class="btn btn-cinza">Enviar Dados</button>
				  </div>
				</form>

			</section>
		<section>
			<div class="container padding-to">
				<div class="row">
					<div class="col-md-4">
						  <div class="row">
							  <div class="text-align">
							  	<h4> Lorem Ipslum Dolor Sit</h4>
							  </div>
						  </div>
						  <div class="row">
							  	<div class="area-bandeira">
									<img src="<?= get_template_directory_uri(); ?>/assets/img/bandeira-do-brasil.png" alt="Bandeira Brasil">
									<p >Lorem Ipslum Dolor Sit 10 <br>Lorem Ipslum Dolor Sit, CEP: 10010</p>
								</div>
								
						  </div>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="text-align">
								<h4> Lorem Ipslum Dolor Sit</h4>
							</div>
						</div>
						<div class="row">
								<div class="area-bandeira">
								  <img src="<?= get_template_directory_uri(); ?>/assets/img/bandeira-do-brasil.png" alt="Bandeira Brasil">
								  <p >Lorem Ipslum Dolor Sit 10 <br>Lorem Ipslum Dolor Sit, CEP: 10010</p>
							  </div>
							  
						</div>
				  </div>
				  <div class="col-md-4">
					<div class="row">
						<div class="text-align">
							<h4> Lorem Ipslum Dolor Sit</h4>
						</div>
					</div>
					<div class="row">
							<div class="area-bandeira">
							  <img src="<?= get_template_directory_uri(); ?>/assets/img/bandeira-do-brasil.png" alt="Bandeira Brasil">
							  <p >Lorem Ipslum Dolor Sit 10 <br>Lorem Ipslum Dolor Sit, CEP: 10010</p>
						  </div>
						  
					</div>
			  	</div>
				  </div>
			</div>
		</section>
		<?php get_footer(); ?>
