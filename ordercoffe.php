<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew_HeavenCoffee/Buy & Order Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="maincoffeeorder">

        <?php 
        echo '<div class="ordercoffee">
            <div class="ordercoffeeh"><h1>Order Form</h1></div>
        </div>'
        ?>



        </div><div class="boxes">
           <?php echo '<div class="box1"><img src="./images/sandwich.jpg" alt="..."></div>'?>
            <div class="box1">
                <?php echo '<h3>Sandwiches</h3>'?>
                <?php echo '<div class="pasa">All Types</div>'?>
            <h5>Quantity</h5>
            <div class="countnbtn">

                <?php echo '<div class="count">
                    <h2>0</h2> 
                    <button onclick="increment()" class"increase" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg></button>
                    <button onclick="decrement()" class"decrease" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM7 11V13H17V11H7Z"></path></svg></button>
                </div>'?>

                <?php echo '<div class="addbtn"><button>Add to Cart</button></div>'?>
            </div>
            </div>

            <?php echo '<div class="box1">

            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select The Sandwich</option>
                <option value="1">Closed Sandwich +$1.00</option>
                <option value="2">Rolled or Pinwheel +$1.00</option>
                <option value="3">Open-Faced Sandwich +$1.00</option>
                <option value="4">Pocket Sandwich +$1.00</option>
                <option value="5">Wrap +$3.00</option>
            </select>

        <select class="form-select" aria-label="Default select example">
            <option selected disabled>Size</option>
            <option value="1">Small</option>
            <option value="2">Medium +$1.00</option>
            <option value="3">Large +$2.00</option>
        </select> 
            </div>


        </div>'
        ?>

        <?php echo '<div class="boxes">
            <div class="box1"><img src="./images/pati2.png" alt="..."></div>
            <div class="box1">
                <h3>Pastries</h3>
                <div class="pasa">All Types</div>
            <h5>Quantity</h5>
            <div class="countnbtn">

                <div class="count">
                    <h2>0</h2> 
                    <button onclick="increment()" class="increase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg></button>
                    <button onclick="decrement()" class="decrease"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM7 11V13H17V11H7Z"></path></svg></button>
                </div>

                <div class="addbtn"><button>Add to Cart</button></div>
            </div>
            </div>
            <div class="box1">

            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select The pastries</option>
                <option value="1">Shortcrust Pastry +$1.00</option>
                <option value="2">Danish Pastry +$1.00</option>
                <option value="3">Puff Pastry +$1.00</option>
                <option value="4">Strudel Pastry +$1.00</option>
                <option value="5">Brioche Pastry +$1.50</option>
                <option value="6">Choux Pastry +$2.00</option>
                <option value="7">Filo (Phyllo) Pastry +$3.00</option>
            </select> 

            </div>

         </div>'?>

        <?php echo '<div class="boxes">
            <div class="box1"><img src="./images/img2.jpg" alt="..."></div>
            <div class="box1">
                <h3>Coffee</h3>
                <div class="pasa">All Types</div>
            <h5>Quantity</h5>
            <div class="countnbtn">

                <div class="count">
                    <h2>0</h2> 
                    <button onclick="increment()" class="increase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg></button>
                    <button onclick="decrement()" class="decrease"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM7 11V13H17V11H7Z"></path></svg></button>
                </div>

                <div class="addbtn"><button>Add to Cart</button></div>
            </div>
            </div>
            <div class="box1">

            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select The Coffee</option>
                <option value="1"> Long Espresso $6.00</option>
                <option value="2">Latte $8.00</option>
                <option value="3">Flat White $7.00</option>
                <option value="4">Cappuccino $6.00</option>
                <option value="5">Espresso $2.00</option>
            </select>

            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select The Flavour</option>
                <option value="1">Caramel +$1.00</option>
                <option value="2">Vanilla +$1.00</option>
                <option value="3">Hazelnut +$1.00</option>
                <option value="4">Lactose-Free +$1.00</option>
            </select>

        <select class="form-select" aria-label="Default select example">
            <option selected disabled>Size</option>
            <option value="1">Small</option>
            <option value="2">Medium +$1.00</option>
            <option value="3">Large +$2.00</option>
        </select> 

            </div>
        </div>'?>


        <div class="faram">

    <div class="row">
  <?php echo '<div class="col">
    <input type="text" placeholder="Enter name" aria-label="Enter name">
  </div>'
  ?>

</div>

        </div>

        <?php echo '<div class="phonenum">
            <input type="tel" placeholder="Phone number-#" aria-label="Phone Number-#">
        </div>'?>

        <?php echo '<div class="email">
            <input type="email" placeholder="Email" aria-label="Email">
        </div>'?>

        <div class="diliverradio">
            <?php echo '<div class="diliver"><h1>Diliver or PickUp</h1></div>'?>
            <?php echo '<div class="radio">
            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Pick-up</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Dilivery +$3.50</label>
</div>'?>
</div>
        </div>

        <?php echo '<div class="submitbtn"><div class="stripe"><img src="./images/Stripe__1_-removebg-preview.png" alt="..."></div> <button>Submit</button> <div class="paypal"><img src="./images/paypall.png" alt="..."></div></div>'?>

        <?php echo '<div class="hombtn"><button type="button"><a href="./index.php">Go to home</a></button></div>'?>

    </div>

   <script src="./script.js"></script>
</body>
</html>