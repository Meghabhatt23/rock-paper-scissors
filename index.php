<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rock Paper Scissors Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
        <header>
            <h1>Rock Paper Scissors</h1>
        </header>
    </div>
    <div class="choices">
        <div class="choice" id="r">
            <img src="images/rock.png">
        </div>
        <div class="choice" id="p">
            <img src="images/paper.png">
        </div>
        <div class="choice" id="s">
            <img src="images/scissors.png">
        </div>
    </div>
    <form action="" method="post" style="text-align:center;">

        <p>Your Choice:</p>
        <p>Rock<input type="radio" value="rock" name="playerthrows"  />
            Paper<input type="radio" value="paper" name="playerthrows"  />
            Scissors<input type="radio" value="scissors" name="playerthrows" />
        </p>
        <p><input type="submit" value="Play"></p>

        <?php
        if($_POST['playerthrows']){

        }

        else if(!$_POST['playerthrows']){

        }
        $playerthrows = $_POST['playerthrows'];
        $Choosefrom= array('rock', 'paper', 'scissors');
        $Choice= rand(0,2);
        $Computer=$Choosefrom[$Choice];

        echo 'You picked: '.$playerthrows.'';
        echo '<br />&<br />';
        echo 'The computer picked: '. $Computer .'';

        if($playerthrows == $Computer){
        }
        if ($playerthrows == $Computer){
            echo ' Draw  ';
        }
        else if($playerthrows == 'rock ' && $Computer == 'scissors'){
            echo 'You Win!';
        }
        else if($playerthrows == 'rock' && $Computer == 'paper'){
            echo  'You Lose! ';
        }
        else if($playerthrows == 'scissors' && $Computer == 'rock'){
            echo  ' You Lose! ';
        }
        else if($playerthrows == 'scissors' && $Computer == 'paper'){
            echo ' You Win!' ;
        }
        else if($playerthrows == 'paper' && $Computer == 'rock'){
            echo 'You Win!';
        }
        else if($playerthrows == 'paper' && $Computer == 'scissors'){
            echo 'You Lose!' ;
        }

        ?>
    </form>
    <script type="text/javascript" src="js/vue.js"></script>
    <script "text/javascript" src="js/index.js"></script>
</body>
</html>
