<?php
include "functions.php";

?>

<html>
    <head>
        <tittle>Silverjack Card Game</tittle>
        <meta charset='utf-8'>
        <style>
            @import url("css/styles.css");
        </style>
        <meta name='viewport' content = 'width=device-width, initial-scale = 1.0'>
    </head>
    <body>
        <header>
            <h1 id="page_title">SilverJack</h1>
        </header>
        <div class= "container">
            <?php
            
            
            
            play();
            
            /*//makeDeck()  done by: John Economides
                
               
                $players = array();  //make array of players
                $deck = array(); 
                $suits = array("clubs", "diamonds", "hearts", "spades");
                $faces = array(1 => "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13");
                
                for($i =1; $i<=4; $i++){ 
                    $players[$i] = $i;
                }
                foreach($suits as $suit){
                    foreach($faces as $face){
                        $deck[] =  ($face . " of" . $suit); // deck now has A (or 1) thru 13 of every suit
                    }
                
                }
                
            
            //setPlayers()  done by: John Economides
            
            shuffle($players);
                   
            for ($i = 1; $i <= 4; $i++) { //player display
                echo "<hr>";
                $player = array_pop($players);
                echo "<img class=\"players\" src=\"players/$player.png\">";
            } */
            ?>
        </div>
        
    </body>
</html>