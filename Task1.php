<?php


$connection =mysqli_connect('localhost' ,'root','','db for control device');
            $get_news_sql = "SELECT * FROM `control device`";
            $get_news_sql = mysqli_query($connection, $get_news_sql);
            while ($row = mysqli_fetch_array($get_news_sql)) 
            {
               echo $row['id'];

               echo $row['M1'];

               echo $row['M2'];

               echo $row['M3'];

               echo $row['M4'];

               echo $row['M5'];

               echo $row['M6'];

               echo $row['ON/OFF'];

             
            }
          ?>