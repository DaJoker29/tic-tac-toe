<!DOCTYPE html>
<?php include 'php/variables.php'; ?>

<html>
    <head>
        <title><?php echo TITLE;?></title>
        <meta charset="utf-8" />
        <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
        <!--[if IE]>
            <link href="stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>

    <body>
        <div id="main">
            <header>
                <h1 id="title"><?php echo TITLE; ?></h1>
                <p id="description"><?php echo DESCRIPTION; ?></p>
            </header>

            <table id="gameboard">
                <tr id="row1">
                    <td class="square tokens-x"></a></td>
                    <td class="square v"></td>
                    <td class="square"></td>
                </tr>
                <tr id="row2">
                    <td class="square h"></td>
                    <td class="square h v tokens-o"></td>
                    <td class="square h"></td>
                </tr>
                <tr id="row3">
                    <td class="square"></td>
                    <td class="square v"></td>
                    <td class="square"></td>
                </tr>
            </table>
        </div>
    </body>
</html>
