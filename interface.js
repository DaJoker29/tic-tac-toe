var readline = require('readline');

var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

var board = [ 1, 2, 3, 4, 5, 6, 7, 8, 9];

var IO = {
    getUser: function (board) {
        this.drawBoard(board);
        rl.question('\nWhat space would you like? ', function (answer) {
            board[answer - 1] = 'X';
            rl.close;
        });
    },

    //getAri:

    drawBoard: function (board) {
        var lines = "";
        for(i = 0; i < board.length; i++) { //Find a way to recognize length
            if(i % 3 == 0)
                lines += ("\n");
            lines += "  ";
            lines += board[i];
        }
        console.log(lines);
    }
}


//Need to figure out how to make this work with callbacks
IO.getUser(board, IO.drawBoard());
