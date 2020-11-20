<?php

include "logic.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
<!-- GOOGLE-font  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;600;800&display=swap" rel="stylesheet">

<!-- css style sheet  -->
<link rel="stylesheet" href="style.css">

<!-- Font awesome -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
<title>php coronavirus API</title>
 

</head>
<body>

<section>
    <div style="width: 30rem;height: 10rem;box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);border-radius: 5px;background-color: rgba(255, 255, 255, .15);backdrop-filter: blur(5px);" class="container-fluid p-5 text-center my-3">
    <h1>Covid-19 Tracker</h1>
    <h5>Here you can track Covid-19 count around the globe</h5>
    </div>
   
    <div class="container my-5">
    <div class="row text-center">
    
    <div class="jumbotron col-4 text-warning ">
    <h5>Confirmed</h5>
    <b><?php echo $total_confirmed; ?></b>

    </div>
    
    <div class="jumbotron col-4 text-success ">
    <h5>Recovered</h5>
    <b><?php echo $total_recovered; ?></b>

    </div>

    <div class="jumbotron col-4 text-danger">
    <h5>Deaths</h5>
    <b><?php echo $total_deaths; ?></b>

    </div>

    </div>
    
    
    </div>

    </section>

    <div class="container text-center">
    <h4 class="text-info">"Prevention is better than Cure"</h4>
    <p>Therefore Stay Indoors And Stay Safe</p>
    </div>

    <div class="container-fluid">
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th>Countries</th>
    <th>Confirmed</th>
    <th>Recovered</th>
    <th>Deaths</th>
    </tr>
    </thead>
    
    <tbody>
    <?php
     foreach($data as $key => $value){
         $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
        ?>
     
     <tr>
        <th><?php echo $key;?></th>
        <td>
        <?php echo $value[$days_count]['confirmed']; ?>
        <?php 
        if($increase !=0)
        { ?>
        <small class="text-danger pl-2"><i class="fa fa-arrow-up" ></i>
 <?php echo $increase; ?></small>
        <?php } ?>

        </td>
        <td>
        <?php echo $value[$days_count]['recovered']; ?>
        </td>
        <td>
        <?php echo $value[$days_count]['deaths']; ?>
        </td>
     </tr>
     
     
     <?php } ?>
    
    </tbody>
    </table>
    </div>

    <!-- footer section  -->

    <footer class="footer mt-auto">
    <div class="container-fluid text-center bg-dark p-5">
    <span class="text-light">Copyright 1999-2020 by AMIT KUMAR SINGH. All Rights Reserved.</span>
    </div>
    </footer>

</body>
</html>