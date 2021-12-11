<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>insert clothes</title>
        
        <!-- <meta name="description" content=""> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="index.html">Home</a></li>

                                <li><a href="products.html">Products</a></li>

                                <li class='active'><a href="checkout.html">Checkout</a></li>

                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="terms.html">Terms</a></li>
                                    </ul>
                                </li>

                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Insert</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="post.php" method="post">
                        <!-- <form action="/insert.php" method="post"> -->
                           <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Name:</label>
                                          <input type="text" class="form-control" name="name">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Price</label>
                                          <input type="text" class="form-control" name="price">
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Category</label>
                                          <select class="form-control">
                                               <option value="">-- Choose --</option>
                                               <option value="">-- Choose --</option>
                                               <option value="">-- Choose --</option>
                                               <option value="">-- Choose --</option>
                                          </select>
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Image</label>
                                          <input type="text" class="form-control" name="image">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Description</label>
                                          <textarea type="text" class="form-control" name="description"></textarea>
                                     </div>
                                </div>
                           </div>
                           <div class="form-group">
                                <!-- <label class="control-label">
                                     <input type="checkbox">
                                     I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
                                </label> -->
                           </div>
                           <div class="form-group">
                                <!-- clear -->

                                <!-- submit -->
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                           </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

     <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php

     import('database.php');
     // Inserts a new record into the database
     // Validates all fields
     if($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "hello";
          // handel clothes form data.
          $name = $_POST['name'];
          $price = $_POST['price'];
          // $category = $_POST['category'];
          $image = $_POST['image'];
          $description = $_POST['description'];

          // if(empty($name) || empty($price) || empty($image) || empty($description)) {
          //      echo "All fields are required.";
          // } else {
               $sql = "INSERT INTO clothes (name, price, image, description) VALUES ('$name', '$price', '$image', '$description')";
               $result = mysqli_query($conn, $sql);
               if($result) {
                    echo "Record inserted successfully.";
               } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
          // }
     }



?>