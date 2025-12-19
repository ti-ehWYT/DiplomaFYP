<?php
require_once('../php/dbConn.php');
    if($_POST['submit'] === 'Search info'){
        
        $searchq = $_POST['search'];
        $searchq = preg_replace("/[^0-9a-z@.: ]/", "", $searchq); //globally find is implicit with preg_replace, no need to say it at the end. EXP: /g .

        if (preg_match("/id:./i", $searchq) == 1){
            $searchq = preg_replace("/id:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE id LIKE '%$searchq%'";
        }
        else if (preg_match("/name:./i", $searchq) == 1){
            $searchq = preg_replace("/name:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE name LIKE '%$searchq%'";
        }
        else if (preg_match("/email:./i", $searchq) == 1){
            $searchq = preg_replace("/email:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE email LIKE '%$searchq%'";
        }
        else if (preg_match("/status:./i", $searchq) == 1){
            $searchq = preg_replace("/status:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE address = '$searchq'";
        }
        else if (preg_match("/description:./i", $searchq) == 1){
            $searchq = preg_replace("/description:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE description LIKE '%$searchq%'";
        }
        else if (preg_match("/member due:./i", $searchq) == 1){
            $searchq = preg_replace("/phone:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE phone LIKE '%$searchq%'";
        }
        else if (preg_match("/status:./i", $searchq) == 1){
            $searchq = preg_replace("/status:./i", "", $searchq);
            $query = "SELECT * FROM locations WHERE status LIKE '$searchq%'";
        }
        
        
        
        else {
            $query = "SELECT * FROM locations";
            echo '<p class="error">Search Failed. Please use correct syntax or try another query</p>';
        }
       
        $sqlquery = mysqli_query($conn, $query);
        $count = mysqli_num_rows($sqlquery);
    
        if($count === 0){
            echo '<p class="error">There was no search result. Please use correct syntax or try another query</p>';
        }
        else {
            while($row = mysqli_fetch_array($sqlquery)){?>
                <tr>
                <td class="id"><?=$row['id']?></td>
                      <td class="name"><?=$row['name']?></td>
                      <td class="email"><?=$row['email']?></td>
                      <td class="status"><?=$row['status']?></td>
                      <td class="actions"><a href="../admin/moreinfo.php?id=<?=$row['id']?>">More Info</a></td>
                      <td class="actions"><a href="../admin/approvebackend.php?id=<?=$row['id']?>">Approve</a></td>
                      <td class="actions"><a href="../admin/delete.php?id=<?=$row['id']?>">Delete</a></td>
                </tr>
                <?php 
            }
        }
    }else{
        
    }
?>