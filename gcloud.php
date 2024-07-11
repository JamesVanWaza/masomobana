<?php include 'nav-admin.php';?>

	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h1 class="text-center">GCLOUD Tips & Tricks</h1>

			<script src="https://gist.github.com/jgacuca567/b055d72c6d3534a7899634e8bf430e1b.js"></script>

			<h2>MySQL</h2>

			<h3>Using the MySQL client in the Cloud Shell</h3>
				<code class="language-sql">gcloud beta sql connect [INSTANCE_ID] --user=root</code><a href="https://goo.gl/YD7FAM" target="_blanks">MySQL Client</a>
				<ul>
					<li><a href="https://goo.gl/DAhEx9" target="_blank">Create a user</a></li>
					<li><a href="https://goo.gl/A60koq" target="_blank">Grant a user access</a></li>
				</ul>
			<h4>Common Errors</h4>
			<dl>Problem: The development server must be started with the --php_executable_path flag set to the path of the php-cgi binary.</dl>
			<dd>Solution</dd>
		</div>
	</div>

	<section>
		<div class="row">
			<h3>Migrating an Instance</h3>
			<ol>
				<li>Export wp-config.php</li>
				<li>Export plugins and themes from old site</li>
				<li>Export DB, and user info</li>
				<li>Create new instance from GCP Marketplace</li>
				<li>Create new user and import info including DB</li>
				<li>Create a new SSH key</li>
				<li>Import new key to GCP and Filezilla</li>
				<li>Import plugins and themes to new instance</li>
				<li>Update wp-config.php</li>
				<li>Export plugins and thems from old site</li>
				<li>Ensure in <code>wp_users</code> table that ,the domain is matching</li>
			</ol>
		</div>
	</section>

<?php include 'footer.php';?>
