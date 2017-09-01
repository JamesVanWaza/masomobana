<?php include_once 'nav.php';?>
    <div class="row">
       <h2 class="text-center">SASS Installation on [Bootstrap] and [Foundation]</h2>
        <section class="large-6 medium-6 small-12 columns">
            <h5>Foundation Installation</h5>
            <ul class="no-bullet">
                Ensure NODEJS/NPM is upto date.<br>
                Run <code class="language-git">npm update</code> then <code class="language-git">npm upgrade</code>
                <li><code class="language-git">npm install foundation-sites --save</code></li>
            </ul>
            <br>
            <h5>SASS Implementation</h5>
            The sass files required are
            <ol>
                <li>Colors.scss</li>
                <li>Gruntfile.js</li>
                <li>Package.json</li>
                <li>Node JS</li>
                <li>Command line installation - Sudo npm install</li>
                <li>Grunt watch after everything is working fine </li>
            </ol>
            <h5>Resources</h5>
            <ul>
                <li><a href="http://sass-lang.com/" target="_blank">SASS</a></li>
                <li><a href="http://gruntjs.com/" target="_blank">Grunt JS</a></li>
                <li><a href="http://compass-style.org/" target="_blank">Compass</a></li>
                <li><a href="https://github.com/zurb/foundation-compass-template/blob/master/config.rb" target="_blank">Config.RB</a></li>
                <li><a href="https://nodejs.org/" target="_blank">Node JS</a></li>
                <li><a href="https://www.npmjs.com/" target="_blank">Node Package Manager</a></li>
                <li><a href="https://github.com/livereload/livereload-js" target="_blank">Live Reload</a></li>
            </ul>
            <br>
            Update SASS
            <code class="language-git">sudo gem update sass</code>
        </section>
        <section class="large-6 medium-6 small-12 columns">
            <h5>Installing SASS using LIBSASS</h5>
            <ul class="no-bullet">
                <li><code class="language-git">cd/Applications/MAMP/htdocs/</code></li>
                <li><code class="language-git">sudo npm install -g bower grunt-cli</code></li>
                <li><code class="language-git">sudo gem install compass</code></li>
                <li><code class="language-git">sudo gem install foundation</code></li>
                <li><code class="language-git">foundation new (project_name) --libsass</code></li>
                <li><code class="language-git">sudo npm install -g bower grunt-cli node-sass livereload</code></li>
                <li><code class="language-git">grunt build</code></li>
                <li><code class="language-git">grunt</code></li>
            </ul>
        </section>
        <br>
        <section class="large-6 medium-6 small-12 columns">
            <h5>Installing Bootstrap using SASS</h5>
                <ul class="no-bullet">
                <li><code class="language-git">cd /Users/jgacuca/Dropbox/htdocs/2016/{Folder Name}</code></li>
                <li><code class="language-git">bower install bootstrap-sass</code></li>
                <li><code class="language-git">create style.scss</code></li>
                <li><code class="language-git">@import '../bower_components/bootstrap-sass/assets/stylesheets/bootstrap'</code></li>
                <li><code class="language-git">@import '_variables.scss' rename to 'variables.scss' in the includes folder</code></li>
                <li><code class="language-git">run grunt</code></li>
            </ul>
        </section>
    </div>
<?php include 'footer.php';?>