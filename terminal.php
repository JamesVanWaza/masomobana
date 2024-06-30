<?php include 'nav.php';?>
<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<h2 class="text-center">Terminal Tricks</h2>
		<ol>
			<li>Opening the command line to the github folder</li>
			<ul class="lower-latin">
				<li class="language-git"><code>cd Library/Mobile\ Documents/com~apple~CloudDocs/htdocs/Github</code></li>
			</ul>
			<li>
				Delete All Terminal Mail
				<ul class="lowerlatin">
					<li>Under the Applications Folder open the iTerm App</li>
					<li>On the CLI type <code class="language-git">mail</code></li>
					<li>If Number of messages are 1 - to Number X, then do delete 1 - (Number) <code class="language-git">delete 1-30</code></li>
					<li>Press <code class="language-git">q</code> to Complete Deletion</li>
					<li>Change Timezone - <code class="language-git">sudo dpkg-reconfigure tzdata</code></li>
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
			<br>
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
			<br>
			<li>
				Initialize Google Cloud Terminal
				<ul class="lower-latin">
					<li>Authenticate Login <code class="language-git">gcloud auth login</code></li>
					<li><code class="language-git">gcloud init</code></li>
				</ul>
			</li>
			<br>
			<li>
				Opening <code class="language-git">bash_profile</code>
				<ul class="lower-latin">
					<li><code class="language-git">touch ~/.bash_profile;</code></li>
					<li><code class="language-git">open ~/.bash_profile</code></li>
				</ul>
			</li>
			<li>
				Clearing Windows terminal				
				<ul class="lower-latin">
					<li><code class="language-git">cls</code></li>
					<li><code class="language-git">Press Enter after running cls</code></li>
				</ul>
			</li>
			<li>
				NPM Commands				
				<ul class="lower-latin">
					<li><code class="language-git">npm doctor</code></li>
					<li><code class="language-git">Checks the status of NPM and tells you what you should update</code></li>
				</ul>
				Add the command that shows how to update NPM on the MAC 
			</li>
			<li>To show dot files<code class="language-git">press command shift .</code></li>
		</ol>
	</div>
</div>
<?php include 'footer.php';?>
