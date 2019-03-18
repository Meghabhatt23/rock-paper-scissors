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


    <form action="" method="post" style="text-align:center;">

        <p>Your Choice:</p>
        <div class="choices">
        <div class="choice" id="r">
        <p><img src="images/rock.png"><input type="radio" value="rock" name="playerthrows"  />
        </div>
        <div class="choice" id="p">
                <img src="images/paper.png"><input type="radio" value="paper" name="playerthrows"  />
            </div>
            <div class="choice" id="s">
                <img src="images/scissors.png"><input type="radio" value="scissors" name="playerthrows" />
            </div>
        </p>
        <p><input type="submit" value="Play"></p>

            </div>
            </form>

    <script type="text/javascript" src="js/vue.js"></script>
    <script "text/javascript" src="js/index.js"></script>
</body>
</html>
