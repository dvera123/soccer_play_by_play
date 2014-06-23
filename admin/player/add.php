<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Insert Player</h1>
        <form method="POST" action="actions/InsertPlayer.php">
            <input type="text" name="name"/>
            <input type="text" name="number"/>
            <select name="is_staple">
                <option value="0">no</option>
                <option value="1">yes</option>
            </select>
            <input type="text" name="team"/>
            <input type="submit"/>
        </form>
        <?php
        
        ?>
    </body>
</html>
