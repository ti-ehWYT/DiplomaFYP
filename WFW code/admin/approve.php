<!-- @format -->
<?php 

    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Page</title>
    <link rel="stylesheet" href="../CSS/approve.css" />
  </head>

  <body>
    <h1>Staff Approve Page</h1>
    <nav>
      <ul>
        <li><a href="../admin/login.php">Logout</a></li>
      </ul>
    </nav>
 

    <main>
      <form id="searchForm" method = "POST" action="../admin/approve.php">
        <input type="search" name="search" placeholder="Search using syntax eg. 'id: 1'" style="background-color:#E3F2FD;"/>
        <input type="submit" value="Search info" name="submit">
        <input type="submit" value="Reset" name="submit">

      </form>

      <div id="displayTable">
        <table>
          <thead>
            <tr>
              <th class="id">ID</th>
              <th class="name">Name</th>
              <th class="email">Email</th>
              <th class="status">Status</th>
              <th class="infoe">More Info</th>
              <th class="approve">Approve</th>
              <th class="delete">Delete</th>
            </tr>
          </thead>
          
          <!-- Here starts foreach / loop to display all users stored in database -->
          <tbody>
            <?php 
              require_once('../php/dbConn.php');
              if(isset($_POST["submit"]) && $_POST["submit"] !== "Reset"){
                require_once('../admin/search.php');
              }
              else{
                $sql = "SELECT * FROM locations";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) { ?>
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
                } else {
                  echo "<p class='error'> 0 results found! </p>";
                }
              }
              mysqli_close($conn);
            ?>
          </tbody>
        </table>
        <!-- Here finishes foreach / loop to display all users stored in database -->
      </div>
    </main>
  </body>

</html>