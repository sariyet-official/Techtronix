<?php
@include("Components/Connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techtronix</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="css/User_style.css"> 
</head>
<body>
    <!-- header file-->
    <?php
    @include "Components/header.php";
    ?>

     <!--Home section starts-->
     <section class="home" id="home">
        <div class="content">
            <h3>Elevate Your Cart</h3>
            <span>Your One-Stop Shop Online</span>
            <p>Revolutionize your shopping experience with our curated selection of products. Discover top-quality items, unbeatable deals, and seamless checkout. Elevate your lifestyle today!</p>
            <a href="#products" class="btn"> Shop Now</a>
        </div>
     </section>

    <!--Home section ends-->

  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="Images/box-video.mp4" loop autoplay muted></video>
            <h3>Shop. Click. Enjoy!</h3>
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Our commitment to competitive pricing ensures that you get the best value without compromising on quality, making your shopping experience both satisfying and affordable. </p>
            <p>Choose us for unparalleled quality, exceptional service, and a seamless shopping experience. With our curated selection, unbeatable prices, and reliable delivery, we prioritize your satisfaction above all else. Join us and discover the difference in every purchase.</p>
            <a href="#" class="btn">Learn More</a>

        </div>
    </div>
</section>

  <!--About section ends-->

<!--icons section starts-->

<section class="icons-container">
    <div class="icons">
    <i class="fa-solid fa-truck" style="color: #B197FC;"></i>
        <div class="info">
            <h3>Free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
    <i class="fa-solid fa-money-bill-transfer" style="color: #B197FC;"></i>
        <div class="info">
            <h3>10 days returns</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
    <i class="fa-regular fa-comments" style="color: #B197FC;"></i>
        <div class="info">
            <h3>24 X 7 support</h3>
            <span>after every purchase</span>
        </div>
    </div>

    <div class="icons">
    <i class="fa-solid fa-shield-halved" style="color: #B197FC;"></i>
        <div class="info">
            <h3>secure payments</h3>
            <span>protected by our patners</span>
        </div>
    </div>
</section>

<!--icons section ends-->

<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>
    <div class="box-container">
        <?php 
            $select_query="select * from products order by rand()";
            $result_query=mysqli_query($con,$select_query);
           
            while($row=mysqli_fetch_assoc($result_query)){
                $pro_id=$row['id'];
                $pro_name=$row['name'];
                $pro_price=$row['price'];
                $pro_image=$row['image'];

            echo "<div class='box'>
            <span class='discount'>-10%</span>
            <div class='image'>
                <img src='Images/$pro_image'>
                <div class='icons'>
                    <a href='#'name='heart' class='fas fa-heart'></a>
                    <a href='#' name='cart' class='cart-btn'>add to cart</a>
                    <a href='#' class='fas fa-share'></a>
                </div>
            </div>
            <div class='content'>
                <h3>$pro_name</h3>
                <div class='price'>₹$pro_price<span>₹29999</span></div>
            </div>
            </div>";
            }
        ?>

    </div>
</section>
<!--Products section ends-->


<!--review section starts-->
<section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>I couldn't be happier with my experience! From the moment I placed my order, everything was seamless. The product exceeded my expectations, and it arrived quicker than I anticipated. Customer service was friendly and helpful when I had a question. I'll definitely be recommending this to all my friends and family!</p>
            <div class="user">
                <img src="Images/person-1.jpg" alt="">
                <div class="user-info">
                    <h3>Souvik Roy</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>This is hands down the best online shopping experience I've had! The product quality is exceptional, delivery was fast, and the customer service was top-notch. I'm absolutely thrilled with my purchase and will definitely be coming back for more. Highly recommend!</p>
            <div class="user">
                <img src="Images/person-2.jpg" alt="">
                <div class="user-info">
                    <h3>Sujit Dev</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>was speedy, and the customer service was fantastic. I'm beyond satisfied and will definitely be a repeat customer. 10/10, would highly recommend!</p>
            <div class="user">
                <img src="Images/person-3.jpg" alt="">
                <div class="user-info">
                    <h3>Rahul Sk</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Absolutely incredible! The product exceeded my expectations, delivery was swift, and the customer service was exceptional. I'm thrilled with my purchase and will definitely be returning for more. Highly recommended!</p>
            <div class="user">
                <img src="Images/person-4.jpg" alt="">
                <div class="user-info">
                    <h3>Amit Bakchi</h3>
                    <span>Happy Customers</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
</section>

<!--review section ends-->


<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <form action="">
            <input type="text" class="box" placeholder="Name">
            <input type="email" class="box" placeholder="Email">
            <input type="number" class="box" placeholder="Number">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send massage" class="btn">
        </form>
        <div class="image">
            <img src="Images/contact.svg" alt="">
        </div>
    </div>
</section>
<!--contact section ends-->

<!--footer file-->
<?php
@include "Components/footer.php";
?>

</body>
</html>