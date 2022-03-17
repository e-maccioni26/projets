<?php

require_once("config.php");
require_once("recipe.php");
require_once("category.php");
require_once("user.php");

var_dump(getRecipeByCategory(1));

?>

<!DOCTYPE html>
<html lang="FR-R">
<head>
    <title>Site cuisine</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <a href="#"><img src="img/logo.svg" alt="logo site"></a>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#">Recipes</a>
                </li>

                <li>
                    <a href="#">Vidéos</a>
                </li>

                <li><a href="#">About</a></li>
                <li><a href="#">Journal</a></li>
            </ul>
        </nav>

            <aside>
                <ul>
                    <li><a href="facebook.com"><img src="img/facebook.svg" alt="Facebook"></a></li>
                    <li><a href="Instagram.com"><img src="img/insta.svg" alt="insta"></a></li>
                    <li><a href="pinterest.com"><img src="img/pinterest.svg" alt="pinterest"></a></li>
                    <li><a href="youtube.com"><img src="img/youtube.svg" alt="youtube"></a></li>
                </ul>
            </aside>
    </header>

    <main>
        <H1>
          All Your Favourite Recipes  <br><span>Made Simple</span>
        </H1>

        <div class="slider">
            <div class="image">
                <img src="img/recipes-post-buttermilk-waffles-with-vanilla-mascarpone-teaser-square-998f9556.webp" alt="Gauffre">
                <img src="img/recipes-post-blueberry-passionfruit-cream-dessert-teaser-square-96d4f9a5.webp" alt="">
                <img src="img/recipes-post-slow-cooker-beef-tomato-stew-teaser-square-47a1ecaa.webp" alt="">
            </div>
            <div class="texte">
                <span id="a">Buttermilk Waffles with Vanilla Mascarpone</span>
                <span id="b">Blueberry Passionfruit Cream Dessert</span>
                <span id="c">Slow Cooker Beef Tomato Stew</span>
            </div>
        </div>


        <div class="aa">
            <P><a href="#">120 recipes</a> everyone can make. Browse through <a href="#">all catégories</a> and pick your favorite dish for every occasion.</P>
            <div class="categorie">
                <a href="#">
                    <div>
                        <img src="img/recipes-category-breakfast-intro-ee901602.webp" alt="petit-dej">
                        <p>Breakfast</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <img src="img/recipes-category-soups-and-stews-intro-3e351de1.webp" alt="soupe">
                        <p>Soups & Stews</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <img src="img/recipes-category-salads-intro-3cd1d27d.webp" alt="salade">
                        <p>Salads</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <img src="img/recipes-category-main-dishes-intro-8a749c82.webp" alt="patte">
                        <p>Main Dishes</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <img src="img/recipes-category-desserts-intro-20ec63d6.webp" alt="dessert">
                        <p>Desserts</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <img src="img/recipes-category-drinks-intro-9b839007.webp" alt="boisson">
                        <p>Drinks</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="categorie2">
            <div class="recipes">
                <img src="img/author-image-0e503672.webp" alt="">
                <p>Hi, I’m Julie, Explore My</p><span>Latest Recipes</span>
            </div>
            <div class="boutton">
                <a href="#">All Recipes</a>
            </div>
        </div>



        <div class="categorie3">

            
            <div>
                <a href="#">
                    <img src="img/recipes-post-covered-apple-cake-8d97a2fa.webp" alt="">
                    <p>Covered Apple Cake</p>
                    <span><img src="img/alarm_black_24dp.svg" alt="">60 min</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="img/recipes-post-broccoli-cheddar-soup-284ed954.webp" alt="">
                    <p>Broccoli Cheddar Soup</p>
                    <span><img src="img/alarm_black_24dp.svg" alt=""> 60 min</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="img/recipes-post-rustic-tomato-and-feta-galettee-663a08a5.webp" alt="">
                    <p>Rustic Tomato and Feta Galette</p>
                    <span><img src="img/alarm_black_24dp.svg" alt=""> 1h45 min</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="img/recipes-post-russian-chocolate-cheesecake-3600db2c.webp" alt="">
                    <p>Russian Chocolate Cheesecake</p>
                    <span><img src="img/alarm_black_24dp.svg" alt=""> 1h20 min</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="img/recipes-post-rolled-herb-roasted-turkey-breast-9da990ed.webp" alt="">
                    <p>Rolled Herb Roasted Turkey Breast</p>
                    <span><img src="img/alarm_black_24dp.svg" alt=""> 2h45 min</span>
                </a>
            </div>
        </div>

        <a class="pomme" href="#">
            <img src="img/journal-post-when-apples-are-in-season-90196854.webp" alt="">
        </a>



        
        <div class="zeubi">
            <div class="titre">
                <h2>When Apples Are in Season</h2>
                <span>29 April 2020</span>
            </div>

            <div class="article">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae reiciendis quaerat sed earum incidunt excepturi esse porro tenetur debitis obcaecati provident, quae exercitationem ut atque commodi sapiente voluptatum cumque!</p>
                <a href="">Read More</a>
            </div>


            <div class="troisblocs">
               <a href="">
                   <div class="imageart">
                        <img id="img" src="img/recipes-post-lemon-garlic-kale-salad-4582bf67.webp" alt="">
                   </div>
                   <div class="desc">
                        <p>Kale Salad with Crispy Chickpeas and Apples</p>
                        <span>Vegetables</span>
                   </div>
               </a>

               <hr>

            <div>
                <a href="">
                    <div class="imageart">
                        <img src="img/recipes-post-homemade-applesauce-and-yogurt-parfaits-e80a55c3.webp" alt="">
                    </div>
                    <div class="desc">
                        <p>Homemade Applesauce and Yogurt Parfaits</p>
                        <span>Fruit Desserts</span>
                    </div>
                </a>
            </div>

            <hr>

            <div>
                <a href="">
                    <div class="imageart">
                        <img src="img/recipes-post-covered-apple-cake-ba4a23b1.webp" alt="">
                    </div>
                    <div class="desc">
                        <p>Covered Apple Cake</p>
                        <span>Cakes & Muffins</span>    
                    </div>
                </a>
            </div>
           </div>
        </div>

        
            <div class="categorie3">
                <div>
                    <a href="#">
                        <img src="img/recipes-post-classic-vanilla-bundt-cake-b4b02ab5.webp" alt="">
                        <p>Classic Vanilla Bundt Cake</p>
                        <span><img src="img/alarm_black_24dp.svg" alt="">1h20 min</span>
                    </a>
                </div>
    
                <div>
                    <a href="#">
                        <img src="img/recipes-post-christmas-tiramisu-7637d2ba.webp" alt="">
                        <p>Christmas Tiramisu</p>
                        <span><img src="img/alarm_black_24dp.svg" alt="">3h45 min</span>
                    </a>
                </div>
    
                <div>
                    <a href="#">
                        <img src="img/recipes-post-no-bake-salted-caramel-peanut-bars-ae27798c.webp" alt="">
                        <p>No-bake Salted Caramel</p>
                        <span><img src="img/alarm_black_24dp.svg" alt=""> 1h30 min</span>
                    </a>
                </div>
    
                <div>
                    <a href="#">
                        <img src="img/recipes-post-cherry-galette-c1efd2fe.webp" alt="">
                        <p>Cherry Galette with Almond Sour</p>
                        <span><img src="img/alarm_black_24dp.svg" alt="">60 min</span>
                    </a>
                </div>
    
                <div>
                    <a href="#">
                        <img src="img/recipes-post-salted-caramel-chocolate-mousse-46910a28.webp" alt="">
                        <p>Salted Caramel Chocolate Mousse</p>
                        <span><img src="img/alarm_black_24dp.svg" alt="">60 min</span>
                    </a>
                </div>
            </div>
           </div>

    </main>
    
</body>
</html>