new Vue({
  data(){
    return{
      megha: '',
      computer: '',
      isStart: false
    }
  },
  computed:{
    determineWinner() {
      var vm = this, userChoice = vm.megha, getComputerChoice = vm.computer
      if (userChoice === getComputerChoice) {
        return "game was a tie!";
      }

      if (userChoice === "rock") {
        if (getComputerChoice === "paper") {
          return "computer won!";
        } else {
          return "megha won!";
        }
      }

      if (userChoice === "paper") {
        if (getComputerChoice === "scissors") {
          return "computer won!";
        }else{
          return "megha won!";
        }

      }

      if (userChoice === "scissors") {
        if (getComputerChoice === "rock") {
          return "computer won";
        }
        else {
          return "megha won!";
        }
      }
    }
  },
  methods:{
    startGame(){
    },
    getComputerChoice() {
      var vm = this, randomNumber  = Math.floor(Math.random() * 3)
      if (randomNumber === 0) {
        vm.computer = "rock";
      } else if (randomNumber === 1) {
        vm.computer = "paper";
      } else {
        vm.computer = "scissors";
      }
    }
  }
}).$mount('#app')
