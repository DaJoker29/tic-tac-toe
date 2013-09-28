<html>
    <head>
        <title>IPO Chart for <?php include "php/variables.php"; echo TITLE; ?></title>
        <link rel="stylesheet" type="text/css" href="stylesheets/ipo.css">
    </head>
    <body>

        <table>
            <tr>
                <th>Class</th>
                <th>Parent</th>
                <th>Properties</th>
                <th>Methods</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Game</td>
                <td>None</td>
                <td>
                    <dt>$turn</dt>
                    <dd>a zero-indexed counter for how many turns has elapsed.</dd>

                    <dt>$move</dt>
                    <dd>0 or 1 to indicate whose move it currently is (player or AI)</dd>

                    <dt>$playToken</dt>
                    <dd>X or O, passed as argument upon launch</dd>

                    <dt>$aiToken</dt>
                    <dd>X or O, the opposite for $playerToken</dd>

                    <dt>$gameBoard</dt>
                    <dd>A nine element array used to represent the gameboard</dd>

                    <dt>$final</dt>
                    <dd>0=incomplete, 1=win, 2=lose, 3=draw. The final status of the game. Determines the alert sent to the user after the game</dd>
                </td>
                <td>
                    <dt>redraw <span class="args">($gameBoard, $move)</span></dt>
                    <dd>Displays the updated game board after each turn. Returns: void</dd>

                    <dt>check <span class="args">($gameBoard)</span></dt>
                    <dd>Takes the current game board after each move and checks if final conditions (win or lose) have been met. If not, increments the turn counter and checks for draw. Returns: $final </dd>

                    <dt>end <span class="args">($final)</span></dt>
                    <dd>Outputs win, lose or draw to the user and calls reset(). Returns: void</dd>

                    <dt>reset <span class="args">()</span></dt>
                    <dd>Clears out all counters and flags. Returns: void</dd>
                </td>
                <td>Main object</td>
            </tr>
            <tr>
                <td><?php include "php/variables.php"; echo TITLE; ?></td>
                <td>None</td>
                <td>None</td>
                <td>
                    <dt>move<span class="args">($gameBoard)</span></dt>
                    <dd>Runs the functions that determine which move for the AI to make. Returns: void</dd>

                    <dt>win <span class="args">($gameBoard)</span></dt>
                    <dd>Places a third aiToken in any row with two already, winning the game. Returns: 0 or 1 (Success or Failure).</dd>

                    <dt>block <span class="args">($gameBoard)</span></dt>
                    <dd>Places a third aiToken in any row with two playTokens already in it. Returns: 0 or 1 (Success or Failure).</dd>

                    <dt>fork <span class="args">($gameBoard)</span></dt>
                    <dd>Determines if an AI fork is possible and creates it. Returns: 0 or 1</dd>

                    <dt>blockFork <span class="args">($gameBoard)</span></dt>
                    <dd>Determines if a player fork is possible and blocks it. Returns: 0 or 1</dd>

                    <dt>center <span class="args">($gameBoard)</span></dt>
                    <dd>Places aiToken in the center if it is available. Returns: 0 or 1</dd>

                    <dt>oppCorner <span class="args">($gameBoard)</span</dt>
                    <dd>Places aiToken in any corner opposite a play token. Returns: 0 or 1</dd>

                    <dt>corner <span class="args">($gameBoard)</span></dt>
                    <dd>Places aiToken in any availabe corner. Returns: 0 or 1</dd>

                    <dt>side <span class="args">($gameBoard)</span></dt>
                    <dd>Places aiToken in any available side space. Returns: 0 or 1</dd>
                </td>
                <td>Namespace that holds all of the AI functions</td>
            </tr>
        </table>
    </body>
</html>
