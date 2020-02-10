<html>
<head>
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        
        
        
        <script>
            /*$(document).ready(function() {
                $("#custom_submit").click(function() {
                    $("#custom").load("load_custom.php");
                });
            });*/
        </script>
        
    </head>

<body>
<div id=custom ></div>
<form action="load_custom.php" method="post"><h2>
Bibles: <input type="number" class="custom_input" name="bibles" value=0><br>
Tracts: <input type="number" class="custom_input" name="tracts" value=0><br>
Contacted: <input type="number" class="custom_input" name="contacted" value=0><br><br>
</h2>
<input class="button button3" id=custom_submit type="submit">




</form>

<button class="button button3" onclick="window.location.href = 'https://tablestatcounter.000webhostapp.com/';" ><i class="fa fa-home"></i> Home</button>

</body>
</html>