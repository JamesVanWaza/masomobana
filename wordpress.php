<?php include_once 'nav.php';?>

	<div class="container-fluid mb-5">
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
			
		<h3 class="text-center">Migrating Wordpress to Production</h3>
			
		<ol>
			<li>Backup the local database</li>
			
			<br>
			
			<li>Duplicate the local database</li>
			
			<br>
			
			<li>Delete and restore from local db</li>
			
			<br>
			
			<li>Run the following steps
				<ul>
					<li>Update the <code>`wp-blogs`</code>table</li>
					<li>Run the <code>NOW()</code> for Last Updated</li>
					<li>Change the domain in<code> `wp-site`</code></li>
					<li>Update <code>wp-sitemeta</code> the url</li>
					<li>Update <code>wp-site</code> the url</li>
					<li>Update <code>wp_x_options</code> All the subdomain table urls to be updated</li>
					<li>Drop the online DB</li>
					<li><code>gzip -k</code> and restore from production local db</li>
					<li>Ensure the users account exists online</li>
					<li>Open SSH and change permissions in order to access files</li>
					<li>Update <code>wp-config.php</code> db name to use the one in production</li>
				</ul>
			</li>
		</ol>
	</div>
	
<?php include 'footer.php';?>