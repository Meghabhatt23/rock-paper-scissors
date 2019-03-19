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
    </div><br /><br />
    <div id="app" style="text-align:center;">
        <div v-if="isStart">
            <button @click="megha = 'paper'; getComputerChoice()"> <img src="images/paper.png" id="choices"></button>
            <button @click="megha = 'scissors'; getComputerChoice()">  <img src="images/scissors.png" id="choices"></button>
            <button @click="megha = 'rock'; getComputerChoice()"><img src="images/rock.png" id="choices"></button>
            <br /><br />

            v.s
            {{computer ? computer : 'Computer'}}
            <br>
            <div v-if="megha != '' && computer != ''">
                {{determineWinner}}
            </div>
        </div>
        <div v-else>
            <button @click="isStart = !isStart">Start Game</button>
        </div>
    </div>
    <script type="text/javascript" src="js/vue.js"></script>
    <script "text/javascript" src="js/index.js"></script>
</body>
</html>
