<?php get_header(); ?>

		<!-- ::::::::::::::::::::: start breadcrumb:::::::::::::::::::::::::: -->
		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2>News &amp; Press</h2>
							<p><a href="index.html">Home</a> / News Details</p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->

            <?php while ( have_posts() ) : the_post();  ?>

		

		<!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- post wrapper -->
						<div class="post-wrapper clearfix">
							<!-- post thumbnail -->
							<div class="single-thumb">
								<?php the_post_thumbnail('large'); ?>
							</div>
							
							<!-- start single blog content -->
							<div class="blog-content">
								<!-- start single blog header -->
								<header class="single-header">
									<div class="single-post-title">
										<h2><?php the_title(); ?></h2>
									</div>
									<!-- post meta -->
									<div class="post-meta">
										<ul>
											<li>
												<a href="#">
													<i class="fa fa-user"></i>
													Ahmed Faruk
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-tag"></i>
													 Marketing, Sales 
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-calendar"></i>
													 20 Mar 2017 
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-comment"></i>
													25 Comments
												</a>
											</li>
											
										</ul>
									</div>
								</header><!-- /.end single blog header -->
								
								<!-- start single blog entry content -->
								<div class="entry-content">
									<?php the_content(); ?>
								</div><!-- /.end single blog entry content -->
								
								<!-- start social link -->
								<div class="social-link">
									<ul>
										<li><a class="facebook" href="#">
											<i class="fa fa-facebook"></i>
											<span>1.6k</span>
										</a></li>
										<li><a class="twitter" href="#">
											<i class="fa fa-twitter"></i>
											<span>1.6k</span>
										</a></li>
										<li><a class="google" href="#">
											<i class="fa fa-google-plus"></i>
											<span>1.6k</span>
										</a></li>
										<li><a class="linkedin" href="#">
											<i class="fa fa-linkedin"></i>
											<span>1.6k</span>
										</a></li>
										<li><a class="pinterest" href="#">
											<i class="fa fa-pinterest-p"></i>
											<span>400</span>
										</a></li>
										<li><a class="reddit" href="#">
											<i class="fa fa-reddit-alien"></i>
											<span>400</span>
										</a></li>
										<li><a class="message" href="#">
											<i class="fa fa-envelope"></i>
											<span>400</span>
										</a></li>
									</ul>
								</div><!-- /.end social link -->
								
								
								
							</div><!-- /.end single blog content -->
							
							<!-- start comments wrapper -->
                                          <?php   if ( comments_open() || get_comments_number() ) : ?>

							<div class="comments-wrapper">
								<div class="single-post-title comment-title">
									<h2>write your comment</h2>
								</div>
                                              
                                   		 <?php       comments_template(); ?>
				


								

                                            <?php  endif;   ?>


							</div><!-- /.end comments wrapper -->
							
							
						</div>
					</div>
				</div>
			</div>
		</section><!-- ./end single-blog section -->

            <?php endwhile; ?>

	<?php get_footer(); ?>