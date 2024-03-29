<?php include 'nav.php';?>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<h2 class="text-center">Ubuntu Docs</h2>
				<ol>
					<li>
						Checking Ubuntu Version on CLI
						<ul class="lowerlatin">
							<li>After logging in run the following: <code class="language-git">lsb_release -a</code></li>
						</ul>
					</li>
					<li>
						Listing Ubuntu Packages
						<ul class="lowerlatin">
							<li>Run the following command: <code class="language-git">apt list --installed</code></li>
						</ul>
					</li>
					<li>
						Finding Version of OpenSSL
						<ul class="lowerlatin">
							<li>Installing OpenSSL Version: <code class="language-git">openssl version</code></li>
							<li>Find Current Version of OpenSSL Running: <code class="language-git">brew install openssl</code></li>
							<li>Searching OpenSSL Version: <code class="language-git">brew search openssl</code></li>
							<li>Using Brew Version: <code class="language-git">brew link --force openssl</code></li>
						</ul>
					</li>
					<li>Clear the Command line <code class="language-git">reset</code></li>
					<li>Initializing a New package.json File <code class="language-git">npm init</code></li>
					<li>Finding Version of Git <code class="language-git">git --version</code></li>
					<li>Finding Version of Python <code class="language-git">python -V</code></li>
					<li>Finding Version of MySQL <code class="language-git">mysql --version</code></li>
					<li>Quit Bash From Terminal <code class="language-git">exit</code></li>
					<li>
						Run Composer
						<ul class="lowerlatin">
							<li><code class="language-git">php composer.phar</code></li>
							<li>Installing a package using Composer <code class="language-git">php composer.phar require pimple/pimple ~3.0</code> <a href="http://pimple.sensiolabs.org/" target="_blank">Pimple</a></li>
							<li>Removing a package using Composer <code class="language-git">php composer.phar remove pimple/pimple ~3.0</code> <a href="http://pimple.sensiolabs.org/" target="_blank">Pimple</a></li>
							<li>Show installed Composer Packages <code class="language-git">php composer.phar show -i</code></li>
							<li>Show all Composer Packages <code class="language-git">php composer.phar show --all</code></li>
						</ul>
					</li>
					<li>
						Running Bash Files
						<ul class="lower-latin">
							<li><code class="language-git">chmod +x /path/to/yourscript.sh</code></li>
							<li>Give execute permission to your script:</li>
							<li>And to run your script:</li>
							<li><code class="language-git">/path/to/yourscript.sh</code></li>
							<li>Since . refers to the current directory: if yourscript.sh is in the current directory, you can simplify this to:</li>
							<li><code class="language-git">./yourscript.sh</code></li>
						</ul>
					</li>
					<li>
						Initialize Google Cloud Terminal
						<ul class="lower-latin">
							<li>Authenticate Login <code class="language-git">gcloud auth login</code></li>
							<li><code class="language-git">gcloud init</code></li>
						</ul>
					</li>
					<li>
						Opening <code class="language-git">bash_profile</code>
						<ul class="lower-latin">
							<li><code class="language-git">touch ~/.bash_profile;</code></li>
							<li><code class="language-git">open ~/.bash_profile</code></li>
						</ul>
					</li>
					<li>
						Updating NPM
						<ul class="lower-latin">
							<li>
								Install and Update NPM
								<code class="language-git">npm install npm@latest -g</code>
							</li>
						</ul>
					</li>
				</ol>
		</div>
	</div>
<?php include 'footer.php';?>