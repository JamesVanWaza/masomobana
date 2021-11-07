<?php include_once 'nav-admin.php';?>
<section class="row">
  <div class="small-12 medium-6 large-6 columns">
    <ul class="no-bullet">
      <li><a href="http://rogerdudler.github.io/git-guide" target="_blank">Git Guide</a></li>
      <li><a href="http://git-tower.com/blog/git-cheat-sheet-detail" target="_blank">Git Cheat Sheet</a></li>
    </ul>
  </div>
  <div class="small-12 medium-6 large-6 columns">
    Removing a Repository Created with Git Init
    <br>
    <code class="language-css">rm -rf .git</code>
  </div>
  <div class="small-12 medium-6 large-6 columns">
    Removing files from a Repository
    <br>
    <code class="language-css">git rm --cached -r</code>
  </div>
</section>
<?php include_once 'footer.php';?>