    <?php 
    include_once'function.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guests</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./footer/fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./footer/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./footer/css/style.css">
        <style>
            @font-face {
        font-family: way;
        src: url(assets/font/BlackWay.otf);

    }
        </style>
    </head>
    <body style="background-color: black;">
        <!-- container -->
        <div> 
            <!-- navbar -->
            <div class="row" style="padding: 12px;" >
                <div style="text-align: center;">
                    <h3 style="font-family:way; font-size: 50px; color: white;">Ra Hijab</h3>
                </div>
            </div>
        <!-- content -->
                <div style="text-align: center;">
                    <h4 style="color: white;">New Items For You</h4>
                </div>

                <div class="row" style="justify-content: space-around; margin-top: 2%;">
                    <?php
                            $data = mysqli_query($conn,"SELECT * FROM daftarhijab");
                        ?>
                        <?php foreach ($data as $row) : ?>
                            
                            <div class="card shadow" style="width: 18rem; border-radius: 12px; background-color: beige;" >
                                <a href="./guests/pesanan/pesanan.php?harga=<?= $row["harga"] ; ?>&hijab=<?=$row["merek_hijab"];?> " style="color: black;">
                                    <img style="padding: 12px;" src="./img/<?= $row ["gambar"];?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h3 class="card-title" style="font-weight: bold;"><?=$row["merek_hijab"]?></h3>
                                    <h5 class="card-text">Rp. <?=$row["harga"]?> </h5>
                                    </div>

                                </a>
                            </div>
                        <?php endforeach ?>
                </div>
        </div>
            
        

        <footer class="footer-48201" style="margin-top: 10%;">

    <div class="container" >
    <div class="row">
        <div class="col-md-4 pr-md-5">
        <a href="#" class="footer-site-logo d-block mb-4" style="color: black;">Ra Hijab</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis accusantium.</p>
        </div>
        <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
        <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><a href="#">Clients</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Journal</a></li>
        </ul>
        </div>
        <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Partners</a></li>
        </ul>
        </div>
        <div class="col-md text-md-center">
        <ul class="social list-unstyled">
            <li><a href="#"><span class="icon-instagram"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-pinterest"></span></a></li>
            <li><a href="#"><span class="icon-dribbble"></span></a></li>
        </ul>
        <p class=""><a href="#" class="btn btn-tertiary" style="background-color: black ">Contact Us</a></p>
        </div>
    </div> 

    <div class="row ">
        <div class="col-12 text-center">
        <div class="copyright mt-5 pt-5">
            <p style="color: black;"><small>&copy;SigurdClub 2022-2023.</small></p>
        </div>
        </div>
    </div> 
    </div>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="./footer/js/jquery-3.3.1.min.js"></script>
    <script src="./footer/js/popper.min.js"></script>
    <script src="./footer/js/bootstrap.min.js"></script>
        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>