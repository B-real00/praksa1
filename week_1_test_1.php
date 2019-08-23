<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 1 - Test 1</title>
    <style type="text/css">
        .part, h1 {
            color: #929394;
            text-align: center;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>LITTLE BOOK SHOP</h1>
    <?php
    $title = "The Philosopher's Stone";
    $author = 'J. K. Rowling';
    $year = 1997;
    $title2 = 'The Chamber of Secrets';
    $year2 = '1998';
    $price = 30;
    $price1 = '35$';
    $title_b1 = True;
    $stock = null; //item stock
    $balance = 50;
    $title_array = array('The', 'Chamber', 'of', 'Secrets');
    $rate = 0.82;
    ?>
    <div class="part">
        <h3>I. What kind of book would you like to buy?</h3>
        <?php
            echo "<p>I was thinking about $title</p>"; //prints I was thinking about The Philosopher's Stone
            echo '<p>Do you have it...?</p>'. $title."<p>"; //pritns Do you have it? The Philosopher's Stone
            echo 'Who is the author of the book?<p>';
            echo 'It was written by '. $author. ' in '. $year.'.<p>'; 
        ?>
    </div>
    <div class="part">
        <h3>II. Let me check the inventory...</h3>
        <?php
            
            if ($title_b1 === True) {
                echo "<p> Yes, we have it and the price is $price $</p>"; //diplay the msg if $title has value true/false
            }
            else {
                echo "Sorry, we sold them all. Maybe something elese...";
            }

            echo '<p> I was thinking about the another book</p>';
            echo "<h4>". $title_array[0]. ' '. $title_array[1]. ' '. $title_array[2]. ' '. $title_array[3]. "</h4>"; //display array elements
            
            if ($stock != 0) {
                echo "<p> Yes we have it and the price is</p>" . $price1 . "<p>";
            }
            else {
                echo "Sorry, that $author is out of stock. Anything else?";
            }
    
        ?>
    </div>
    <div class="part">
        <h3>III. How much do I owe You?</h3>
        <?php
            $price_dollar = $price . '$';
            echo '<p> Your total is '. $price_dollar;
            echo "<p>Ok, but how much in pound's  ";
            echo '<p> It would be ' .$price * $rate.'&pound'; 

            if ($balance > 0) {
                echo '<p>Your transaction is complete.
                Your payment has been successfully processed</p>';
            }
            else {
                echo "Sorry but your card is not accepted.";
            }
            $total = $balance - $price;
            echo 'I still have '.$total.'$ for something else...';
            
        ?>
        <h3>THANKS FOR SHOPPING WITH US</h3>
    </div>
</body>
</html>