tic-tac-toe
===========

A simple Tic Tac Toe game with an unbeatable AI

##To-do

1. Split business code and interface 
2. Refactor code
    1. Object-Oriented
3. Rebuild interface
4. Combine (driver and interface)

##Requirements

* Player will start the game, choosing to go first (X) or second (O).
* Player will play the game, using a graphical interface
* AI will utilize the ["Perfect" Tic-Tac-Toe strategy](http://en.wikipedia.org/wiki/Tic-tac-toe#Strategy) to either win or draw the game

##Deployment

+ Front-End: Custom Web Interface
+ Back-End: Javascript, AJAX, jQuery

##"Perfect" Tic-Tac-Toe strategy

Play the first possible move that you can

>1. **Win**: If the player has two in a row, they can place a third to get three in a row.
>2. **Block**: If the [opponent] has two in a row, the player must play the third themself to block the opponent.
>3. **Fork**: Create an opportunity where the player has two threats to win (two non-blocked lines of 2).
>4. **Blocking an opponent's fork**:
>  1. The player should create two in a row to force the opponent into defending, as long as it doesn't result in them creating a fork. For example, if "X" has a corner, "O" has the center, and "X" has the opposite corner as well, "O" must not play a corner in order to win. (Playing a corner in this scenario creates a fork for "X" to win.)
>  2. If there is a configuration where the opponent can fork, the player should block that fork.
>5. **Center**: A player marks the center. (If it is the first move of the game, playing on a corner gives "O" more opportunities to make a mistake and may therefore be the better choice; however, it makes no difference between perfect players.)
>6. **Opposite corner**: If the opponent is in the corner, the player plays the opposite corner.
>7. **Empty corner**: The player plays in a corner square.
>8. **Empty side**: The player plays in a middle square on any of the 4 sides.

##Usage Scenario (player-first)

1. Player Launches Game
  1. Game board & Turn Counter Created
  2. X chosen by Player
  3. Player Turn
2. Player Turn
  1. Turn Counter increments
  2. Player Choice logged on board
  3. Check if won/draw
  4. AI Turn
3. AI Turn
  2. Turn Counter increments
  3. Board position sent to AI function
  4. AI function calculates "Best" move
  5. Move logged on board
  6. Check if won/draw
  7. Player Turn
4. Check if Won/draw
  1. If Win conditions met then player/AI wins and game over
  2. If Turn Counter is equal to 9, game is a draw and game over


*Same procedures follow if AI-first but in reverse order*

##AI algorithm to determine "Best Move" Pseudocode

1. **if** AI two in a row **and** third space open **then**  
  ***win()*** (place in third space)

2. **if** Player two in a row **and** third space open **then**  
  ***block()*** (place in third space)

3. **if** AI finds fork (Scan potential moves to see if any create forks) **then**  
  ***fork()*** (place in space that creates fork)

4. **if** AI finds opponent fork (See 3.)**then**  
  ***block_fork()*** (place in space that blocks fork)

5. **if** Center open **then**  
  ***take_center*** (place center)

6. **if** Opponent has corner **and** Opposite corner is free **then**  
  ***take_opposite_corner*** (place in opposide corner)

7. **if** Any Corner available **then**  
  ***take_any_corner*** (place in any available corner)

8. **if** Any Side Available **then**  
  ***take_any_side*** (place in any available side)

