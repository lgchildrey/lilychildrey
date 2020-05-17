
<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Hello World</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="index.html" title="">Home</a></li>									
					<li class="has-children">
						<a href="category.html" title="">Categories</a>
						<ul class="sub-menu">
			            <li><a href="category.html">Wordpress</a></li>
			            <li><a href="category.html">HTML</a></li>
			            <li><a href="category.html">Photography</a></li>
			            <li><a href="category.html">UI</a></li>
			            <li><a href="category.html">Mockups</a></li>
			            <li><a href="category.html">Branding</a></li>
			         </ul>
					</li>
					<li class="has-children current">
						<a href="single-standard.html" title="">Blog</a>
						<ul class="sub-menu">
			            <li><a href="single-video.html">Video Post</a></li>
			            <li><a href="single-audio.html">Audio Post</a></li>
			            <li><a href="single-gallery.html">Gallery Post</a></li>
			            <li><a href="single-standard.html">Standard Post</a></li>
			         </ul>
					</li>
					<li><a href="style-guide.html" title="">Styles</a></li>
					<li><a href="about.html" title="">About</a></li>	
					<li><a href="contact.html" title="">Contact</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->
   

   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
							<img src="images/thumbs/single/single-01.jpg"> 
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title">Hello World!</h1>	

						<ul class="entry-meta">
							<li class="date">May 10, 2020</li>						
											
						</ul>						

						<p class="lead">Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint.</p> 

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
						</p>

						<p><img src="images/shutterbug.jpg" alt=""></p>

						<h2>Large Heading</h2>

						<p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

						<blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

						<h3>Smaller Heading</h3>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

						<p>Quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

<pre><code>
code {
   font-size: 1.4rem;
   margin: 0 .2rem;
   padding: .2rem .6rem;
   white-space: nowrap;
   background: #F1F1F1;
   border: 1px solid #E1E1E1;	
   border-radius: 3px;
}
</code></pre>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>

						<ul>
							<li>Donec nulla non metus auctor fringilla.
								<ul>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet.</li>
								</ul>
							</li>
							<li>Donec nulla non metus auctor fringilla.</li>
							<li>Donec nulla non metus auctor fringilla.</li>
						</ul>

						<p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed..</p>

						<p class="tags">
		  			     	<span>Tagged in :</span>
		  				  	<a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
		  			   </p>

		  			   <div class="author-profile">
		  			   	
		  			   		<ul class="author-social">
		  			   			<li><a href="#">Facebook</a></li>
						        	<li><a href="#">Twitter</a></li>
						        	<li><a href="#">GooglePlus</a></li>
						        	<li><a href="#">Instagram</i></a></li>					        	
		  			   		</ul>
		  			   	</div>
		  			   </div> <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		  			   

	  			   <div class="pagenav group">
		  			   <div class="prev-nav">
		  			   	<a href="#" rel="prev">
		  			   		<span>Previous</span>
		  			   		Tips on Minimalist Design 
		  			   	</a>
		  			   </div>
		  				<div class="next-nav">
		  					<a href="#" rel="next">
		  						<span>Next</span>
		  			   		Less Is More 
		  					</a>
		  				</div>  				   
	  				</div>

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

	   <section id="comments" class="body">
	  
		<header>
			  <h2>Comments</h2>
		  </header>
  
	  <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
		<li class="no-comments">Be the first to add a comment.</li>
		<?php
		  foreach ($comments as &$comment) {
			?>
			<li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
					  <footer class="post-info">
						  <abbr class="published" title="<?php echo($comment['date']); ?>">
							  <?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
						  </abbr>
  
						  <address class="vcard author">
							  By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
						  </address>
					  </footer>
  
					  <div class="entry-content">
						  <p><?php echo($comment['comment']); ?></p>
					  </div>
				  </article></li>
			<?php
		  }
		?>
		  </ol>
		  
		  <div id="respond">
  
		<h3>Leave a Comment</h3>
  
		<form action="post_comment.php" method="post" id="commentform">
  
		  <label for="comment_author" class="required">Your name</label>
		  <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
		  
		  <label for="email" class="required">Your email</label>
		  <input type="email" name="email" id="email" value="" tabindex="2" required="required">
  
		  <label for="comment" class="required">Your message</label>
		  <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
  
		  <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
		  <input name="submit" type="submit" value="Submit comment" />
		  
		</form>
		
	  </div>
			  
	  </section>

   </section> <!-- end content -->


   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Abstract 2016</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>