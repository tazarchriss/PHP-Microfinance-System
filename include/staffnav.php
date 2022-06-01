<!-- This is the navbar for staff -->
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="staff.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                     
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Manage Customers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                  
                                        <a class="nav-link" href="addcustomer.php">Register Customer</a>
                                        <a class="nav-link" href="allcustomers.php">All Customers</a>
                                    
                                 
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#loans" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Manage Loans
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="loans" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="loans">
                                  
                                        <a class="nav-link" href="paid.php">Paid loans</a>
                                        <a class="nav-link" href="unpaid.php">Active loans</a>
                                        <a href="declined.php" class="nav-link">Declined Loan</a>

                                    
                                 
                                </nav>
                            </div>
                            <a class="nav-link" href="allpayments.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-download"></i></div>
                                Payments
                            </a>
                   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?php echo $_SESSION['lname']; ?></div>
                    </div>
                </nav>
            </div>
