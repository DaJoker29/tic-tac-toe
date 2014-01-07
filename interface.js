var readline = require('readline');

var rl= readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

var board = [ 1, 2, 3, 4, 5, 6, 7, 8 ,9];

function drawBoard(board) {
    var lines = "";
    for(i = 0; i < 9; i++) {
        if(i % 3 == 0)
            lines += ("\n");
        lines += "  ";
        lines += board[i];
    }
    console.log(lines);
}

drawBoard(board);
rl.question('\nWhat space would you like? ', function (answer) {
    board[answer -1] = 'X';
    rl.close();
    drawBoard(board);
});

