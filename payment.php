<!-- This is the page for clearing customer's laon -->
<?php
  session_start();
  include 'config/connection.php';
  if ($_SESSION['id']=='') {
    header('Location:index.php');
  }
  else{
   
    $customer=$_GET['id'];
    $sql1="SELECT * FROM loan,customer 
    WHERE loan.loan_id='$customer'
    AND customer.cust_id=loan.customer";
    $qry1=mysqli_query($conn,$sql1);
    
     include 'include/header.php'; ?>
        <div id="layoutSidenav">
        <?php include 'include/adminnav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-2">
                        <ol class="breadcrumb mb-4 text-right">
                            <li class="breadcrumb-item active"><i class="fa fa-file"></i> Manage Loans/Loan Payment</li>
                        </ol>
                        <?php
                            if (isset($_GET["requested"])){
                                ?>
                                <p class="alert alert-success">Loan is Successfully requested wait for approval ! <a href="allcustomers.php" class="text-light "><i class="fa fa-trash float-end text-success"></i></a> </p>
                                <?php     
                                 }
                        

                                 ?>
                        <div class="card mb-4">
                            <div class="card-header bg-dark text-secondary">
                                <i class="fas fa-download me-1"></i>
                                Loan Payment
                            </div>
                            <div class="card-body">
                            <?php

                            if (mysqli_num_rows($qry1) == 0){

                                
                            ?>
                         

                                        <?php

                                ?>
                                <h4 class="text-primary text-center">Customer's loan is on process !</h4>
                                <?php
                            } 
                            else{
                                $row=mysqli_fetch_array($qry1);
                            ?>   
                              
                            <form method="post" action="config/payment.php">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                <h5>Customer: <?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></h5>
                                <hr>
                                <h5>Issued Date: <?php echo $row['issued_date']; ?></h5>
                                <hr>
                                <h5>Issued Amount: <?php echo $row['issued_amount']; ?> Tsh</h5>
                                <hr>
                                <h5>Paid Amount: <?php echo $row['paid_amount']; ?> Tsh</h5>
                                <hr>
                                <h5>Remaining Amount: <?php echo $row['remain']; ?> Tsh</h5>
                                <hr>
                                <h5>Deadline: <?php echo $row['pay_date']; ?> </h5>
                                <hr>
                                <input type="text" name="loan" value="<?php echo $row['loan_id']; ?>" hidden> 
                                <input type="text" name="staff" value="<?php echo $_SESSION['id']; ?>" hidden>
                                </div>   
                            </div>
                                       
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="text" class="form-control" name="Amount">
                                                        <label for="inputFirstName">Loan Payment Amount</label>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                       
                                         
    
    
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" name="save" class="btn btn-primary btn-block">Save Payment</button>
                                                    
                                                </div>
                                            </div>
                                        </form>

                                   <?php 
                                    }
                        
                                }
                                    ?>
                                   </tbody>
                                </table>
                        </div>
                        </div>
                    </div>
                </main>
                <?php include 'include/footer.php'; 
                
                
                
  
  ?>
