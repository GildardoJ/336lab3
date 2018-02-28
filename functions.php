<?php
function play(){
//makeDeck()  done by: John Economides
     $players = array();  //make array of players
    //$deck = array(); 
    $faces = array( "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13");  
    $deck = array("clubs" => $faces, "diamonds"  => $faces, "hearts" => $faces, "spades" => $faces);
    $playerTotalPoints = array(); // total points for each player
    $face = array(); // empty array for each face of the card of each player
    
    $hand = array("clubs" => $face, "diamonds" => $face, "hearts" => $face, "spades" => $face);
        
   
    for($i = 0; $i<4; $i++){  // set players
        $players[$i] = $hand;
        $playerTotalPoints[$i] = 0;
    }
    
   /* 
    foreach($suits as $suit){
        foreach($faces as $face){
            $deck[] =  ($face . " of" . $suit); // deck now has A (or 1) thru 13 of every suit
        }
    
    } */
     foreach ($deck as $key=>$value) { // display deck
        $suit = $deck[$key];
        shuffle($suit); // suffle each suit.
        echo "<div>".$key."</div>";
        echo "<ul> suit size" . count($suit);
        for ($i = 0; $i < count($suit); $i++) {
            echo "<li>Card ($i): ".$suit[$i]."</li>";
        }
        echo " end of suit </ul>";
        unset($key);
    }
    
    
    echo " number of players = " . count($players). " ";
    //for($i = 0 ; $i < count($players); $i++){
    foreach($players as $key =>$value){
        $deck = $players[$key];
        echo "size of deck : " . $deck;
        foreach ($deck as $key=>$value) { // display hand of players
            $suit = $deck[$key];
            //shuffle($suit); // suffle each suit.
            echo "<div>".$key."</div>";
            echo "<ul> suit size" . count($suit);
            for ($i = 0; $i < count($suit); $i++) {
                echo "<li>Card ($i): ".$suit[$i]."</li>";
            }
            echo " end of suit</ul>";
            unset($key);
        }     
    }   
    
    
    
    
    seatPlayers($players);
    
    
    display($players); // display players
    
    return true;
}

function seatPlayers(&$players){
    
    
    shuffle($players);  // shuffle player order
    
    //for($i =0; $i< 4; $i++){  //debug players
    //    echo " P".$i."layer ". $players[$i];
   // }    
    return true;
}

function score(){
    return true;
}

function display(&$players){
    
    
    //setPlayers()  done by: John Economides
    for ($i = 0; $i < 4; $i++) {
        echo "<div class='player-field'>";
        $player = $players[$i];
        
        echo "<img class=\"players\" src=players/".$players[$i].".png>";
        
        echo "</div>";
    }
    
    return true;
}







?>