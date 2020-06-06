<?php include_once 'nav-admin.php'; ?>
<section class="row">
	<h2 class="text-center">SQL TIPS AND TRICKS</h2>
	<div class="small-12 medium-12 large-12 columns">
		<table width="100%">
			<thead>
				<th>Statement</th>
				<th>Information produced by statement</th>
			</thead>
			<tbody>
				<tr>
					<th>SELECT DATABASE()</th>
					<td>Default database name (NULL if none)</td>
				</tr>
				<tr>
					<th>SELECT USER()</th>
					<td>Current user as given by client when connecting</td>
				</tr>
				<tr>
					<th>SELECT CURRENT_USER()</th>
					<td>User used for checking client privileges</td>
				</tr>
				<tr>
					<th>SHOW [GLOBAL|SESSION] STATUS</th>
					<td>Server global or session status indicators</td>
				</tr>
				<tr>
					<th>SHOW [GLOBAL|SESSION] VARIABLES</th>
					<td>Server global or status configuration variables</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<div class="row">
	<div class="small-12 medium-6 large-6 columns">
		<p>My SQL Resources</p>
		<ul class="no-bullet">
			<li><a href="http://code.tutsplus.com/articles/an-introduction-to-stored-procedures-in-mysql-5--net-17843" target="_blank">MySQL Procedures Example</a></li>
		</ul>
	</div>
	<article class="small-12 medium-6 large-6 columns">
		<ol>
			<li>
				Check MySQL Version
				<code class="language-sql">SELECT VERSION();</code>
			</li>
			<li>
				CREATE A TABLE
				<code class="language-sql">CREATE TABLE {Insert Table Name}();</code>
			</li>
			<li>
				DATETIME stores the date and time in the format
				<code class="language-sql">YYYY-MM-DD-HH:MM:SS</code>
			</li>
			<li>
				Exporting a Database with a TIMESTAMP
				<code class="language-sql">@DATABASE@-%F-%T</code> e.g <br>
				<code class="language-sql">DatabaseName-2016-12-01 7:00</code>
			</li>
			<li>
				Select users from table
				<code class="language-sql">SELECT User FROM mysql.user;</code>
			</li>
			<li>Get Size of SQL Database</li>
			<code class="language-sql">
				SELECT table_schema
				<br>
				Round(Sum(data_length + index_length) / 1024 / 1024, 1) "DB Name", "DB Size in MB"
				<br>
				FROM information_schema.tables
				<br>
				GROUP BY table_schema; </code>
		</ol>
	</article>
</div>
<?php include 'footer.php'; ?>