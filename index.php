<?php
    include 'dbh.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        
        
        <script>
            $(document).ready(function() {
                $("#bibles").click(function() {
                    $("#stats").load("load_bibles.php");
                });
                $("#tracts").click(function() {
                    $("#stats").load("load_tracts.php");
                });
                $("#contacted").click(function() {
                    $("#stats").load("load_contacted.php");
                });
            
            });
        </script>
        
    </head>
    
    <body>
        <div id="stats">
            <?php
                $sql = "SELECT * FROM stats_db";
                $result = mysqli_query($link, $sql);
                
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="container-sm">
                    <h3>
                    <div class="row">
                        <div class="col text-white" style="background-color:blue;"><?php
                        echo "Bibles: ";
                        echo $row['bibles'];
                        ?></div>
                        <div class="col" style="background-color:yellow;">
                            <?php
                        echo "Tracts: ";
                        echo $row['tracts'];
                        ?>
                        </div>
                        <div class="col text-white" style="background-color:green;">
                        <?php
                        echo "Contacted: ";
                        echo $row['contacted'];
                        ?>
                        </div>
                        
                    </div>
                    </h3>
                </div>
                <br><br>
        </div>
        
        <div class="container-sm">
        
        
        <button class="button buttonb" id="bibles">Bibles</button><br><br>
        <button class="button buttont" id="tracts">Tracts</button><br><br>
        <button class="button buttonc" id="contacted">Contacted</button><br><br>
        <form action="https://forms.gle/8mX4jNBpYKNShKj18">
    <input class="button button2" type="submit" value="Individual Stats" />
</form>
<br>
<form action="https://airtable.com/shrK70ThPDbe3BzQa">
    <input class="button button2" type="submit" value="GTech Sign-up" />
</form>
<br>
<form action="custominput.php">
    <input class="button button3" type="submit" value="Custom Input" />
</form>


</div>
    </body>
    
</html>