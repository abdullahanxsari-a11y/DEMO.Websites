<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="mainmenu">

        <div class="menuin">

            <!-- Menu Heading -------------------->
        <?php 
        echo '<div class="menuhed">
            <div class="knife"><img src="./images/Teal_Yellow_Neon_Restaurant_Logo-removebg-preview.png" alt="..."></div>
            <div class="menuheading">
            <div class="menulogo"><a href="./index.php"><img src="./images/Brown_Black_Modern_Coffee_Shop_Logo-removebg-preview.png" alt="..."></a></div><hr>
            <div class="flexmenu">
                <div class="addresinfo">
                    <div class="add">
                    <h4>Address <span>food street 24 A</span></h4><h4>Contact <span>123 456 789</span></h4></div>
                    <div class="emaill">
                    <h4>Email <span>@BrewheavenCoffee.com</span></h4></div>
                    <div class="menh"><h1>menu</h1></div>
                </div>
            </div>
            </div>
        </div>';
        ?>

        <!-- Main Menu ------------------>
        <div class="menu">

        <!-- Menu Images ------------------------------>
            <div class="menuimages">

            <?php echo '<div class="item"><img src="./images/menupastries.jpeg" alt="...."></div>';?>
            <?php echo '<div class="item"><img src="./images/menusandwich.jpg" alt="...."></div>';?>
            <?php echo '<div class="item"><img src="./images/menucup.jpg" alt="...."></div>';?>
            </div>
            <!-- Menu Contents ------------------>
            <div class="menuinfor">
                <!-- Pastries Section ------------------->
                <?php echo '<div class="pastries">
                    <div class="forpast">

                        <div class="pastrie1">
                            <h3>Shortcrust Pastry <div class="rate"><h5>$45</h5></div></h3>
                            <p>Crumbly, dense dough made with flour, butter, <br> and a little water; used for pies and tarts.</p>
                        </div>

                        <div class="pastrie1">
                            <h3>Puff Pastry <div class="rate"><h5>$34</h5></div></h3>
                            <p>Light, flaky dough with layers created by folding butter <br> into dough multiple times; rises when baked.</p>
                        </div>
                        <div class="pastrie1">
                            <h3>Choux Pastry <div class="rate"><h5>$45</h5></div></h3>
                            <p>Light, airy dough made by cooking flour, butter, <br> and water, then adding eggs; puffs up when baked</p>
                        </div>
                        <div class="pastrie1">
                            <h3>Filo (Phyllo) Pastry <div class="rate"><h5>$55</h5></div></h3>
                            <p>Very thin, delicate dough layered with butter or oil; <br> creates crispy, flaky textures.</p>
                        </div>

                    </div>
                    <div class="threepast">
                        <div class="pastrie1">
                            <h3>Danish Pastry <div class="rate"><h5>$25</h5></div></h3>
                            <p>Sweet, yeasted laminated dough, similar to puff pastry but richer with eggs and sugar</p>
                        </div>
                        <div class="pastrie1">
                            <h3>Strudel Pastry <div class="rate"><h5>$32</h5></div></h3>
                            <p>Thin, elastic dough stretched until nearly transparent, <br> rolled around fillings.</p>
                        </div>
                        <div class="pastrie1">
                            <h3>Brioche Pastry <div class="rate"><h5>$19</h5></div></h3>
                            <p>Enriched yeast dough with butter, eggs, and sugar; <br> soft and slightly sweet.</p>
                        </div>
                    </div>
                </div>';
                ?>

                <!-- Sandwiches Sections ---------------------------------------->
                <?php echo '<div class="sandwichs">

                <div class="threesand">
                    <div class="sand1">
                        <h3>Closed Sandwich <div class="rate"><h5>$20</h5></div></h3>
                        <p>Fillings between two slices of bread; the most common type.</p>
                    </div>

                    <div class="sand1">
                        <h3>Open-Faced Sandwich <div class="rate"><h5>$10</h5></div></h3>
                        <p>Fillings on a single slice of bread, often topped with sauce or gravy; <br> no top bread to "close" it.</p>
                    </div>
                    <div class="sand1">
                        <h3>Wrap <div class="rate"><h5>$34</h5></div></h3>
                        <p>Fillings rolled in a flatbread like a tortilla; <br> portable and often cold.</p>
                    </div>
                </div>

                <div class="tosand">
                    <div class="sand1">
                        <h3>Rolled or Pinwheel <div class="rate"><h5>$38</h5></div></h3>
                        <p>Thin fillings spread on bread or tortilla, then rolled <br> and sliced into spirals; great for appetizers.</p>
                    </div>
                    <div class="sand1">
                        <h3>Pocket Sandwich <div class="rate"><h5>$66</h5></div></h3>
                        <p>Fillings stuffed into a bread pocket, like pita.</p>
                    </div>
                </div>

                </div>';
                ?>

                <!-- Coffee Section ----------------------------------->
                <?php echo '<div class="coffees">
                    <div class="forcoff">
                        <div class="coff1">
                            <h3>Espresso <div class="rate"><h5>$62</h5></div></h3>
                            <p>Strong, concentrated coffee brewed by forcing hot water through finely-ground beans under high pressure. <br> Typically served in small 1-2 oz shots.</p>
                        </div>
                        <div class="coff1">
                            <h3>Americano <div class="rate"><h5>$70</h5></div></h3>
                            <p>Espresso diluted with hot water, resembling drip coffee <br> in strength but with a bolder flavor.</p>
                        </div>
                        <div class="coff1">
                            <h3>Cappuccino <div class="rate"><h5>$71</h5></div></h3>
                            <p>Espresso with steamed milk and a thick layer of foam, often in equal <br> parts (1/3 espresso, 1/3 milk, 1/3 foam).</p>
                        </div>
                        <div class="coff1">
                            <h3>Latte <div class="rate"><h5>$59</h5></div></h3>
                            <p>Espresso with steamed milk and a thin foam layer, <br> typically creamier and milkier than a cappuccino.</p>
                        </div>
                    </div>

                    <div class="threecoff">
                        <div class="coff1">
                            <h3>Macchiato <div class="rate"><h5>$78</h5></div></h3>
                            <p>Espresso "marked" with a small amount of steamed milk or foam; stronger than a latte.</p>
                        </div>
                        <div class="coff1">
                            <h3>Mocha <div class="rate"><h5>$98</h5></div></h3>
                            <p>Espresso blended with chocolate syrup or powder, steamed milk, <br> and often topped with whipped cream.</p>
                        </div>
                        <div class="coff1">
                            <h3>Cold Brew <div class="rate"><h5>$90</h5></div></h3>
                            <p>Coffee steeped in cold water for 12-24 hours, resulting in a smooth, low-acidity drink.</p>
                    </div>
                    </div>

                </div>

            </div>


        </div>';
        ?>

        <!-- Menu Footer --------------------------------------------->
        <?php echo '<div class="menufooter">
            <div class="menuinfoot">
                <div class="name"><h1>Brew_Heaven-Coffee</h1></div>
                <div class="diliv">
                    <div class="dilivery"><h4>Dilivery Services</h4><span>876 234 234</span></div>
                    <div class="number"><h4>Contact</h4><span>345 454 343</span></div>
                </div>
                <div class="backbtn"><button><a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M8 7V11L2 6L8 1V5H13C17.4183 5 21 8.58172 21 13C21 17.4183 17.4183 21 13 21H4V19H13C16.3137 19 19 16.3137 19 13C19 9.68629 16.3137 7 13 7H8Z"></path></svg></a></button></div>
            </div>
        </div>
        </div>
        </div>';
        ?>
    </header>

    <script src="script.js"></script>
</body>
</html>