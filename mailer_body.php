
<?php
/*

The variables needed to be injected into the contract are:
Place then in your content as you will.

${currentDate}
${clientName}
${clientAddress}
${providerName}
${providerAddress}
${servicesRendered}
${totalPrice}
${clientSignature}
${providerTechnician}
${timestamp}
*/
?>



<h1>SERVICE AGREEMENT</h1>
<p>
	<p>This Contract for Services is made effective as of ${currentDate}, by and between ${clientName} of ${clientAddress} (the 'Recipient'), and ${providerName} of ${providerAddress} (the 'Provider').</p>
</p>
<ol>
	<li>
		<h2>DESCRIPTION OF SERVICES</h2> Effective ${currentDate}, ${providerName} will provide to ${clientName} the following services (collectively, the 'Services'):
		<br/>${servicesRendered}</li>
	<li>
		<h2>PAYMENT</h2> Payment shall be made to Provider in the total amount of ${totalPrice} upon completion of Services.
		<br/> 
    </li>

    <li>
        <h2>[...] MORE LEGAL LINES </h2>
    </li>
    
    <li>
		<h2>NOTICE</h2> If you're gonna u gotta</li>
    </li>

    <li>
        <h2>[...] MORE LEGAL LINES </h2>
    </li>
</ol>
<p>IN WITNESS WHEREOF, the parties hereto have caused this Agreement to be executed by their duly authorized representatives as of the date first above written.</p>
<p> Service Recipient:
    <br/>${clientName}
	<br/> By: <u>&nbsp;&nbsp;&nbsp;${clientSignature}&nbsp;&nbsp;&nbsp;</u> Date: ${currentDate}
	<br>
	<br>Service Provider:
	<br>${providerName}
	<br>By: <u>&nbsp;&nbsp;&nbsp;${providerTechnician}&nbsp;&nbsp;&nbsp;</u> Date: ${currentDate}
	<br>Contract timestamped: ${timestamp}
	<br>
</p>