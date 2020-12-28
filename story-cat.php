
	<!-- Section categorias-->
	<section class="section story-cat-section">		
		<div class="container-fluid">		
		    <div class="col-12">
				<div class="row">
					<div class="col-12">	  		  			
						<div class="owl-carousel owl-theme" id="owl-story-cat">			
							<?php 
								$categorias= getAllMenuCategorias();			
								foreach ($categorias as $row) { ?>
								<div class="item">
									<div class="story-cat">
										<a href="categorie.php?id=<?php echo $row['id'] ?>">
											<div class="story-cat-item d-xs-block d-sm-block d-md-none" style="padding: 1px 1px 1px 1px; margin-top: 8px; align-items: center;">
												<figure class="story-fig">
														<img src="img/categorias/<?php if ($row['url']!='') {
															echo $row['url'];
														} else {
															echo "no-image.png";
														}?>" alt="categoria">
													<?php //} ?>
												</figure>
												<div class="story-cat-info">
													<h6><?php echo $row['nombre']?></h6>
													</p>
												<!--a href="#" class="site-btn btn-line">Agregar al Carrito</a-->
												</div>
											</div>
											<div class="story-cat-item d-none d-lg-block d-md-block" style="padding: 15px 15px 15px 15px">
												<figure>
												<figure class="story-fig">
														<img src="img/categorias/<?php if ($row['url']!='') {
															echo $row['url'];
														} else {
															echo "no-image.png";
														}?>" alt="categoria" >
													<?php //} ?>
												</figure>
												</figure>
												<div class="product-info">
													<h6><?php echo $row['nombre']?></h6>
													</p>
												<!--a href="#" class="site-btn btn-line">Agregar al Carrito</a-->
												</div>
											</div>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
		    </div>
		</div>
    </section>
