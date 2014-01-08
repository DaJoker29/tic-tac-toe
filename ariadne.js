//Imports
var readline = require('readline');

//Globals
var board = new Array(9);
var turn = 0;
var moves = 0;
var stat = 0;
const p1 = "X";
const p2 = "O";
const win = [
    [ 1, 2, 3], //Horizontal
    [ 4, 5, 6],
    [ 7, 8, 9],
    [ 1, 5, 9], //Diagonal
    [ 3, 5, 7],
    [ 1, 4, 7], //Vertical
    [ 2, 5, 8],
    [ 3, 6, 9]
];

//Create Interface
var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

//IO Object

function getUser() {
    debugger;
    rl.question('\nWhat space would you like? ', function (answer) {
        board[answer - 1] = 'X';
        drawBoard(null); //Place callback to next sequential function here
        rl.close();
    });
}

function drawBoard(callback) {
    debugger;
    var lines = "";
    for(i = 0; i < board.length; i++) { 
        if(i % 3 == 0)
            lines += ("\n");
        lines += "  ";
        if(undefined == board[i])
            lines += i + 1;
        else
            lines += board[i];
    }
    rl.write(lines + "\n");
    rl.pause();
    callback();
}


//Need to figure out how to make this work with callbacks
//Main Loop

    //Get show player updated board
    drawBoard(getUser);
    //Get player's input

