<?php
/*
Template Name: Page Kata Hari Ini
*/
get_header(); ?>
<div class="margin-information">
<div class="image-tv">
      	<img src="<?php bloginfo('template_url');?>/images/radio/kata-hari.png">
    </div>
	<div id="content" class="content-area col-sm-12 col-md-12 ">
		<div class="">
		  <div class="row">		
		  	<div class="asd">
				<div class="col-sm-5 col-md-3 ">
					<div class="row">
						<div class="col-md-12">
						<div class="sidebar-deviotion-margin">
							<div class="asd">
								<div class ="ribbon">
									PROGRAM RADIO
									<i></i>
									<i></i>
								</div>
							</div>
							<div class="margin-devotion-sidebar">
								<div class="sidebar-radio">
								  <ul class="nav nav-sidebar-radio">
									<li class=""><a href="<?php get_site_url();?>kata-kata-wasiat" class="sidebar-title"><span class="sidebar-title">KATA-KATA WASIAT</span></a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>kata-hari-ini" class=""><span class="sidebar-title">KATA HARI INI</span></a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>pedoman-hidup" class=""><span class="sidebar-title">PEDOMAN HIDUP</span></a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>rencana-agung" class=""> <span class="sidebar-title">RENCANA AGUNG</span> </a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>pelangi-kasih" class=""> <span class="sidebar-title">PELANGI KASIH</span> </a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>seribu-satu-makna-pengalaman-hidup" class=""> <span class="sidebar-title">SERIBU SATU MAKNA </span><span class="sidebar-title">PENGALAMAN HIDUP</span> </a></li>
									<li class="lastchild-sidebar-radio"><a href="<?php get_site_url();?>rumah-pelangi" class=""> <span class="sidebar-title">RUMAH PELANGI</span> </a></li>
								  </ul>
								 </div>
							</div>
				  		</div>
				  	</div>
				  	<div class="section">
					  	<div class="col-sm-5 col-md-12 ">
							<div class="contact-sidebar">
								<div class="row">
									<div class="margin-contact">
										<div class="row">
									<div class="col-md-10 background-contact-radio">
										<div class="section">
										<div class="logo-contact">
											<img src="<?php bloginfo(template_url);?>/images/radio/contact.gif">
										</div>
										</div>
										<div class="section">
											<div class="font-contact">
												<address>
													Jika ingin bertanya dan berdiskusi mengenai topik yang dibincarakan, dapat mengirimkan sms ke:</br>
													<div class="section">
														<div class="glyphicon glyphicon-envelope"></div> <span><a href="sms:+6281319397455">+6281319397455</a></span></a> </br>
														<div class="glyphicon glyphicon-envelope"></div> <span><a href="sms:+6285798797123">+6285798797123</a></span></a> </br>
													</div>
												</address>
											</div>
										</div>
									</div>
									</div>
									</div>
								</div>
							</div>
				  		</div>
			  		</div>
		  		</div>
		  		</div>
		  	</div>	
			<div class="col-md-9 main content-devotion-background ">
				<?php
					$today = getdate();
					$args = array(
						'cat'=>'20',
						'orderby'=>'ID',
						'order'=>'DESC'
						);
						// The Query
					query_posts( $args );

						// The Loop
				?>
				<div class="devotion-content">
					<div class="row">
					<div class="kursus-contain">
					<div class="col-md-10">

						<div class="margin-main-information-kegiatan">
							<div class=" radio-main-scroll ">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="col-md-12">
									<div class="row">
										<div class="margin-both">
										<div class="radio-wrap">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-9 ">
													<h3><?php the_title();?></h3> 
												</div>
												<div class="col-md-3">
													<div class="date-program-radio">
														<span><?php echo get_the_date( 'd/m/Y' ); ?></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="radio-center">
												<?php the_content();?>
											</div>
										</div>
										</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<?php else : ?>
								<h2>Not Found</h2>
							<?php endif; 
							wp_reset_query();
							?>
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>