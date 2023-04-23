<?php include 'nav-admin.php';?>
<div class="row">
	<section class="small-12 medium-12 large-12 columns">
		/*Insert styling code that Smashing Magazine Uses to style code - See Masomo Bana*/
		<code>SELECT DATE_FORMAT(NOW(), '%W, %D of %M, %Y');</code>/*Displays the correct Date Format*/
		<br>
		<code>SELECT COUNT(*) FROM (Insert Table Name);</code>
		/*Displays the number of rows in the table*/
		<br>
		/*The Distinct Keyword is used to remove the duplicate rows aand produce a set of unique values - See Mail Table in Cookbook Database*/
		<code>SELECT srcuser FROM mail;</code>
		<code>SELECT DISTINCT srcuser FROM mail;</code>
		<br>

		/*Use Limit to show x number of rows*/
		<code>SELECT () FROM () LIMIT 1;</code>
		/*This shows only one row*/
		<br>
		/*Use Limit to Retrieve 20 Rows at a Time*/
		<code>SELECT () FROM () LIMIT 0, 20;</code>

		<br>
		SELECT statements that start with a specific letter (v)
		<code>SELECT t, srcuser, srchost FROM mail WHERE srchost LIKE 'a%';</code>
		<code>SELECT t, srcuser, srchost FROM mail WHERE srchost LIKE 'b%';</code>
		<code>SELECT t, srcuser, srchost FROM mail WHERE srchost LIKE 'c%';</code>
		<code>SELECT t, srcuser, srchost FROM mail WHERE srchost LIKE 'd%';</code>
		<code>SELECT t, srcuser, srchost FROM mail WHERE srchost LIKE 'e%';</code>
		<br>
		Feature Request Example
		Try and use this when setting up a list of users to be called in the database using the @platform
		<code>SELECT DATE_FORMAT(t, '%M %e, %Y') AS date_sent, CONCAT(srcuser, '@', srchost) AS sender, CONCAT('@', dsthost) AS recipient, size FROM mail;</code>

		Counting Largest, Smallest. For Limit, the first parameter skips (x) number of rows and the second limits (x) number of rows
		<code class="language-sql">
			SELECT * FROM profile;
			SELECT * FROM profile ORDER BY `birth` LIMIT 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 1, 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 2, 1;
		</code>
		<code class="language-sql">
			SELECT * FROM profile ORDER BY `birth` LIMIT 3, 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 4, 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 5, 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 6, 1;
			SELECT * FROM profile ORDER BY `birth` LIMIT 7, 1;
		</code>
		<br>
		cloning a table
		<code>CREATE TABLE mail2 LIKE mail;</code>
	</section>


<section class="small-12 medium-12 large-12 columns">
		<table>
		<thead>
			<tr>
				<th width="33.3%">Binary data type</th>
				<th width="33.3%">Nonbinary data type</th>
				<th width="33.3%">Maximum Length</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>BINARY</td>
				<td>CHAR</td>
				<td>255</td>
			</tr>
			<tr>
				<td>VARBINARY</td>
				<td>VARCHAR</td>
				<td>65,535</td>
			</tr>
			<tr>
				<td>TINYBLOB</td>
				<td>TINYTEXT</td>
				<td>255</td>
			</tr>
			<tr>
				<td>BLOB</td>
				<td>TEXT</td>
				<td>65,535</td>
			</tr>
			<tr>
				<td>MEDIUMBLOB</td>
				<td>MEDIUMTEXT</td>
				<td>16,777,215</td>
			</tr>
			<tr>
				<td>LONGBLOB</td>
				<td>LONGTEXT</td>
				<td>4,294,967,295</td>
			</tr>
		</tbody>
		</table>
	</section>
</div>
DATA Types

<?php include 'footer.php';?>