<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
    </head>
    <body>
        <?php
    include 'dbh.php';
    $bibles = $_POST["bibles"];
    $tracts = $_POST["tracts"];
    $contacted = $_POST["contacted"];

    $sql = "UPDATE stats_db SET bibles = bibles + {$bibles}";
    $result = mysqli_query($link, $sql);
    $sql = "UPDATE stats_db SET tracts = tracts + {$tracts}";
    $result = mysqli_query($link, $sql);
    $sql = "UPDATE stats_db SET contacted = contacted + {$contacted}";
    $result = mysqli_query($link, $sql); 
    ?>
        Bibles:
    <?php
        echo $bibles;
    ?><br>
        Tracts:
    <?php
        echo $tracts;
    ?><br>
        Contacted:
    <?php
        echo $contacted;
    ?><br>
<form action="index.php">
    <input class="button button3" type="submit" value="Back" />
</form>
    </body>
</html>


