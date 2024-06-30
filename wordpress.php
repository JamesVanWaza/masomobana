<?php include_once 'nav.php';?>
<div class="container-fluid">
	<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<h2 class="text-center">Wordpress</h2>
				To add menus in wordpress use the wp_nav_menu function
				functions.php is where everything is to add extra functions to a site that help improve the site add an includes folder and functions-extra.php page

				<h6>Get Page Link From Slug</h6>
					<code class="language-php">
						echo get_permalink(get_page_by_path('Insert Permalink Here'));
					</code>
			</div>
		</div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/1h8jDeYQpPY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<br>
			<h3 class="text-center">Migrating Wordpress to Production</h2>
			<ol>
				<li>Change the domain in<code> `wp-blogs`</code></li>
				<li>Run the <code>NOW() for Last Updated</code></li>
				<li>Update the subdomains to match the domain name</li>
				
			</ol>
	</div>
		</div>
	
<?php include 'footer.php';?>