<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jd's Pizza</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-pizza-slice"></i>JD's pizza</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#commander">commander</a>
        <a href="#about">about</a>
        <a href="#loisir">Video</a>
        <a href="#order">calculatrice</a>
        <a href="#order">Inscrit pour oder</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="fè rechech ou a la..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>JD'S PIZZA DISPONIBLE</span>
                    <h3>notre specialité</h3>
                    <p>LE SAVEUR EST A NOTRE PORTER VENEZ TENTER AVEC NOUS</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/pizza2.jpeg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>JD'S PIZZA DISPONIBLE</span>
                    <h3>special pizza</h3>
                    <p>LE SAVEUR EST A NOTRE PORTER VENEZ TENTER AVEC NOUS</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/za.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>JD'S PIZZA DISPONIBLE</span>
                    <h3>hot pizza</h3>
                    <p>LE SAVEUR EST A NOTRE PORTER VENEZ TENTER AVEC NOUS</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="commander" id="commander">

    <h3 class="sub-heading"> nos pizza </h3>
    <h1 class="heading"> populaire</h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/royal.jpg" alt="">
            <h3>Pizza royal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$900 gdes</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/crem.jpg" alt="">
            <h3>special pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>750 gdes</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-4.png" alt="">
            <h3>clasic pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>600 gdes</span>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/pizza.jpeg" alt="">
            <h3>pizza large</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>1000 gdes</span>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> a propos de nous</h3>
    <h1 class="heading"> qui somme nous? </h1>

    <div class="row">

        <div class="image">
            <img src="images/jdmix.jpg" alt="">
        </div>

        <div class="content">
            <h3>JD'S PIZZA</h3>
            <p>Notre PDG Daguillard Jameson dit ( Jdmix_jeneral_la) il est un entrepreneur, DJ , et aussi un informaticien etudier a ITAC cisco </p>
            <p>il tient a faire de tout son coté pour rester le meilleur de tous les fasfood du pays pour vous donner un saveur different.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>livrezon gratis</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>fasil pou peye</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">aprann plis de nou</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- loisir -->
<section class="loisir" id="loisir">
    <?php 
    include("include/tablevideo.php");
    ?>
</section>


<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading"> komande kounia </h3>
    <h1 class="heading"> rapid et gratis </h1>

    <form action="">

        <div class="inputBox">
            <div class="input">
                <span>antre nom ou komplè</span>
                <input type="text" placeholder="antre nom ou">
            </div>
            <div class="input">
                <span>nimewo telefon ou</span>
                <input type="number" placeholder="antre nimewo w">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>kisaw ap komande</span>
                <input type="text" placeholder="antre pizza ou vle a">
            </div>
            <div class="input">
                <span>ki typ pizza ou vle</span>
                <input type="test" placeholder="piti ou gro">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>konbyen pizza wap komande</span>
                <input type="number" placeholder="entre konbyen pizza ou vle">
            </div>
            <div class="input">
                <span>lè ak dat</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>addres ou</span>
                <textarea name="" placeholder="antre adress ou" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>ekri nou yon mesaj</span>
                <textarea name="" placeholder="entre mesaj" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="komande kunia" class="btn">

    </form>

</section>

<!-- order section ends -->
<section class="calculatrice" id="calculatrice">
    <?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "erreur";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>entre premye nomb lan</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>entre dezyem nomb</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>seleksyone oparatyon ou vle a </td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">les cayes</a>
            <a href="#">port-au prince</a>
            <a href="#">jackmel</a>
            <a href="#">jeremie</a>
            <a href="#">port de paix</a>
        </div>

        <div class="box">
            <h3>lien rapide</h3>
            <a href="#">home</a>
            <a href="#">inscrit pour oder</a>
            <a href="#">commander</a>
            <a href="#">loisir</a>
            <a href="#">calculatrice</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">509 47766740</a>
            <a href="#">djjdmixhaiti@gmail.com</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2021 by <span>Jdmix_jeneral_la</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/pi.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>