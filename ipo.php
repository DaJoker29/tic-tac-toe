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
                    <dt>$playToken</dt><dd>X or O, passed as argument upon launch</dd>
                    <dt>$ariToken</dt><dd>X or O, the opposite for $playerToken</dd>
                </td>
                <td>
                    <dt>turn()</dt><dd>Increment the $turn property, checks if $turn=9, then calls end(draw)</dd>
                    <dt>end()</dt><dd>Called with/without argument. If no argument, checks the gameboard for win, lose or draw. If passed argument or check returns something, sends to output and ends game.</dd>
                </td>
                <td>Main object</td>
            </tr>
            <tr>
                <td>Board</td>
                <td>game</td>
                <td>
                </td>
                <td></td>
                <td>Object representing the gameboard output to the user</td>
            </tr>
        </table>
        <table>
            <tr>
                <th>Module</th>
                <th>Input</th>
                <th>Processing</th>
                <th>Output</th>
            </tr>
            <tr>
                <td>launch()</td>
                <td>Number value (either 0 or 1, X or O respectively)</td>
                <td>Start a new game with player assigned either x or o</td>
                <td>New gameObject with (player) token either X or O</td>
            </tr>
            <tr>
                <td>player.turn()</td>
                <td>Player selection for their next move</td>
                <td>Log playerMove to gameObject.board</td>
                <td>Updated gameObject.board</td>
            </tr>
            <tr>
                <td>ariadne.turn()</td>
            </tr>
        </table>
    </body>
</html>
