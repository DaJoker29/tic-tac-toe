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
                    <dt>$turn</dt><dd>a zero-indexed counter for how many turns has elapsed.</dd>
                    <dt>$move</dt><dd>0 or 1 to indicate whose move it currently is (player or AI)</dd>
                    <dt>$playToken</dt><dd>X or O, passed as argument upon launch</dd>
                    <dt>$aiToken</dt><dd>X or O, the opposite for $playerToken</dd>
                    <dt>$gameBoard</dt><dd>A nine element array used to represent the gameboard</dd>
                    <dt>$final</dt><dd>0=incomplete, 1=win, 2=lose, 3=draw. The final status of the game. Determines the alert sent to the user after the game</dd>
                </td>
                <td>
                    <p>General</p>
                    <dt>redraw <span class="args">($gameBoard, $move)</span></dt><dd>Displays the updated game board after each turn. Returns: void</dd>
                    <dt>check <span class="args">($gameBoard)</span></dt><dd>Takes the current game board after each move and checks if final conditions (win or lose) have been met. If not, increments the turn counter and checks for draw. Returns: $final </dd>
                    <dt>end <span class="args">($final)</span></dt><dd>Outputs win, lose or draw to the user and calls reset(). Returns: void</dd>
                    <dt>reset <span class="args">()</span></dt><dd>Clears out all counters and flags. Returns: void</dd>
                    <p>AI</p>
                    <dt>move<span class="args">($gameBoard)</span></dt><dd>Runs the functions that determine which move for the AI to make. Returns: void</dd>
                    <dt>win <span class="args">($gameBoard)</span></dt><dd>Places a third aiToken in any row with two already, winning the game. Returns: 0 or 1 (Success or Failure).</dd>
                </td>
                <td>Main object</td>
            </tr>
        </table>
    </body>
</html>
