<?php include_once 'nav-admin.php';?>
<div class="row">
	<article class="small-12 medium-12 large-12 columns">
		<code>*I </code> - Display Availability
		<br>
		<code>I  </code> - Ignore
		<br>
		<code>E  </code> - End Transaction
		<br>
		<code>IR </code> - Ignore and Redisplay the PNR
		<br>
		<code>ER </code> - End Transaction and Redisplay the PNR
		<br>
		<code>EL </code> - End Transaction, Leave PNR on queue and display the next PNR
		<br>
		<code>QR </code> - Remove PNR from queue
		<br>
		<code>QXI</code> - Quit, Exit the queue and Ignore the PNR
		<br>
		<code>EW </code> - Process segment changes and End Transaction
		<br>
		<code>EWR</code> - Process segment changes, End Transaction, and Redisplay the PNR
	</article>
</div>

<?php include 'footer.php';?>