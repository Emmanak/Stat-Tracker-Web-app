<?php
 include 'dbh.php';
 
 $value = 10;
 $sql = "UPDATE stats_db SET bibles = bibles + 1";
 $result = mysqli_query($link, $sql);
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