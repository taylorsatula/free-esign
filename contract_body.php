<!-- THIS IS HOLDER CONTENT TILL ANOTHER COMMIT. DON'T USE THIS CONTRACT. IT ISN'T REAL OR MADE BY A LAWYER -->


<h1>SERVICE AGREEMENT</h1>

        <participants>
            <p>This Contract for Services is made effective as of <?php echo $_SESSION['currentDate'] ?>, by and between <?php echo $_SESSION['clientName'] ?> of <?php echo $_SESSION['clientAddress'] ?> (the "Recipient"), and <?php echo $_SESSION['providerName'] ?> of <?php echo $_SESSION['providerAddress'] ?> (the "Provider").</p>
        </participants>

        <contract>
            <ol>
                <li><h2>1. DESCRIPTION OF SERVICES</h2>
                    Beginning on <?php echo $_SESSION['dateOfService'] ?>, <?php echo $_SESSION['providerName'] ?> will provide to <?php echo $_SESSION['clientName'] ?> the following services (collectively, the "Services"):<br />
                <?php echo $_SESSION['servicesRendered'] ?></li>

                <li><h2>2. PAYMENT</h2>
                    Payment shall be made to Provider in the total amount of $<?php echo $_SESSION['totalPrice'] ?> upon completion of Services.<br />
                    If any invoice is not paid when due, interest will be added to and payable on all overdue amounts at 8 percent per year, or the maximum percentage allowed under applicable CURRENTSTATE laws, whichever is less.</li>

                <li>In addition to any other right or remedy provided by law, if <?php echo $_SESSION['clientName'] ?> fails to pay for the Services when due, <?php echo $_SESSION['providerName'] ?> has the option to treat such failure to pay as a material breach of this Contract, and may cancel this Contract and/or seek legal remedies.</li>

                <li><h2>3. TERM</h2>
                    This Contract will terminate automatically upon completion by Provider of the Services required by this Contract.</li>

            </ol>
        </contract>

        <attest>
            <p>IN WITNESS WHEREOF, the parties hereto have caused this Agreement to be executed by their duly authorized representatives as of the date first above written.</p>
        </attest>
        