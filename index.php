<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/stry.css">

  <title>Cricket</title>
  <script type="text/javascript">
  function myfunc(e) {
  if(e.keyCode == '9') {
      alert("Tab is disabled don't try to press tab");
      e.preventDefault();
  }
}
  </script>

  	<div class="container-fluid heading">

  		<div class="row rowh">
  			<div class="col-sm-3">

          <div class="row" style="height:50px; margin-top:5px;">
            <div class="col-sm-6">
              <div>
                <?php $name=$_SESSION['useruid'];
                echo "<h6 class='h66'>$name</h6>"; ?>
              </div>


            </div>
            <div class="col-sm-6">
              <div class="dropdown btns">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">TABLES</button>
              <div class="dropdown-menu">
                   <a class="dropdown-item" href="#ptable">PLAYER</a>
                   <a class="dropdown-item" href="#mtable">MATCH</a>
                   <a class="dropdown-item" href="#titable">TICKETS</a>
                   <a class="dropdown-item" href="#stable">STATISTICS</a>
                   <a class="dropdown-item" href="#ttable">TEAMS</a>
                </div>
              </div>
            </div>
          </div>


        </div>



        <div class="col-sm-5">
  				<div class="text-lead h1 cricket"><span style="font-family:impact;text-shadow:2px 5px 10px #2850a6";>CRICKET MANAGEMENT</span></div>
  			</div>
  			<div class="col-sm-4">
  				<div>

            <form method="post" action="includes/logout.php" name="logform" >
                  <input type="submit" name="logout" class="btn btn-primary btn-sub" value="Logout">
             </form>
  	     </div>
  			</div>
  		</div>
  	</div>






</head>
<body>
	<div class="container margin">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <p class="text-center"><a href="#" data-target="#team-form" data-toggle="modal"
          role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">TEAM</a></p>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <p class="text-center"><a href="#" data-target="#tickets-form" data-toggle="modal"
          role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">TICKETS</a></p>
      </div>
      <div class="col-sm-3"></div>
    </div>


    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <p class="text-center"><a href="#" data-target="#matchup-form" data-toggle="modal"
          role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">MATCHUP</a></p>
      </div>
      <div class="col-sm-3"></div>
    </div>

    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <p class="text-center"><a href="#" data-target="#stats-form" data-toggle="modal"
          role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">STATISTICS</a></p>
      </div>
      <div class="col-sm-3"></div>

    </div>

    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <p class="text-center"><a href="#" data-target="#player-form" data-toggle="modal"
          role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">PLAYER</a></p>
      </div>
      <div class="col-sm-3"></div>

    </div>
   </div>



<div class="modal fade" id="team-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        Team
      </div>
      <div class="modal-body">
        <form method="post" action="includes/team.php" name="teamform" >
  				<div class="form-group">
  					<label for="tid">Team ID:</label>
  					<input onkeydown="myfunc(event)" type="number" placeholder="Please Enter only Numbers" tabindex="-1" name="tid" class="form-control" required="Please fill team id" pattern="\d{4}">
  				</div>
  				<div class="form-group">
  					<label for="tname">Team Name:</label>
  					<input  onkeydown="myfunc(event)" type="text" tabindex="-1" placeholder="Please Enter Text" name="tname" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="tcountry">Country:</label>
  					<input onkeydown="myfunc(event)" type="text" tabindex="-1" placeholder="Please Enter Country name"name="tcountry" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="cname">Captain Name:</label>
  					<input onkeydown="myfunc(event)" type="text" tabindex="-1" placeholder="Please Enter only Text" name="cname" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="vname">Vice-Captain Name:</label>
  					<input onkeydown="myfunc(event)" type="text" tabindex="-1" placeholder="Please Enter only Text" name="vname" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="coname">Coach Name:</label>
  					<input onkeydown="myfunc(event)" type="text" tabindex="-1" placeholder="Please Enter only Text" name="coname" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="modal-footer text-center">
            <div>
    					<input type="submit" name="submit1" tabindex="-1" class="btn btn-success btn-submit">
    				</div>
          </div>
  			</form>
      </div>
    </div>

  </div>

</div>




<div class="modal fade" id="tickets-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        Tickets
      </div>
      <div class="modal-body ">
        <form method="post" action="includes/tickets.php">
  				<div class="form-group">
  					<label for="ttid">Ticket ID:</label>
  					<input type="number"  placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="ttid" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="ttmid">Ticket Match Id:</label>
  					<input type="number"  placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="ttmid" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="ttvenue">Venue:</label>
  					<input type="text"  placeholder="Please Enter only Venue" onkeydown="myfunc(event)" name="ttvenue" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="tttime">Ticket Time:</label>
  					<input type="date" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)"  name="tttime" class="form-control" required="Please fill all the details">
  				</div>
  				<div class="form-group">
  					<label for="ttprice">Ticket Price:</label>
  					<input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)"  name="ttprice" class="form-control" required="Please fill all the details">
  				</div>

  				<div class="modal-footer text-center">
            <div>
    					<input type="submit" tabindex="-1" name="submit2" class="btn btn-success btn-submit">
    				</div>
          </div>
  			</form>
      </div>
    </div>

  </div>

</div>


<div class="modal fade" id="matchup-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        matchup
      </div>
      <div class="modal-body">
        <form method="post" action="includes/matchup.php">
          <div class="form-group">
            <label for="mid">Match ID:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="mid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="t1name">Team1 Name:</label>
            <input type="text" placeholder="Please Enter only text" onkeydown="myfunc(event)" name="t1name" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="t2name">Team2 Name:</label>
            <input type="text" placeholder="Please Enter only text" onkeydown="myfunc(event)" name="t2name" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="mpredict">Prediction:</label>
            <input type="text" placeholder="Please Enter text" onkeydown="myfunc(event)" name="mpredict" class="form-control" required="Please fill all the details">
          </div>
          <div class="modal-footer">
            <div>
              <input type="submit"  tabindex="-1" name="submit3" class="btn btn-success btn-submit">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>

</div>


<div class="modal fade" id="stats-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        stats
      </div>
      <div class="modal-body">
        <form method="post" action="includes/stats.php">
          <div class="form-group ">
            <label for="sid">Stats id:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)"  name="sid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="mid">match Id:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="mid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="swname">Winner NAME:</label>
            <input type="text" placeholder="Please Enter only Text" onkeydown="myfunc(event)" name="swname" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="swinby">Won by:</label>
            <input type="text" placeholder="Please Enter only text" onkeydown="myfunc(event)" name="swinby" class="form-control" required="Please fill all the details">
          </div>
          <div class="modal-footer">
            <div>
              <input type="submit"tabindex="-1"  name="submit4" class="btn btn-success btn-submit">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>

</div>


<div class="modal fade" id="player-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        Player
      </div>
      <div class="modal-body">
        <form method="post" action="includes/player.php" class="form">
          <div class="form-group">
            <label for="pid">Player ID:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="pid" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="prank">Player Ranking:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="prank" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pteam">Player Team:</label>
            <input type="text" placeholder="Please Enter Text" onkeydown="myfunc(event)" name="pteam" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pname">Player Name:</label>
            <input type="text" placeholder="Please Enter Text" onkeydown="myfunc(event)" name="pname" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="page">Age:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="page" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pjob">Batsman/Bowler/all-Rounder:</label>
            <input type="text" placeholder="Please Enter Text" onkeydown="myfunc(event)"name="pjob" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pavg">Player Avg:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="pavg" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="psr">Player Strike Rate:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="psr" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="ptr">Player total runs:</label>
            <input type="number"placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="ptr" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="ptw">Player total wickets:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="ptw" class="form-control" required="Please fill all the details">
          </div>
          <div class="form-group">
            <label for="pbest">Player Best:</label>
            <input type="number" placeholder="Please Enter only Numbers" onkeydown="myfunc(event)" name="pbest" class="form-control" required="Please fill all the details">
          </div>
          <div class="modal-footer">
            <div>
              <input type="submit" name="submit5" tabindex="-1" class="btn btn-success btn-submit">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>

</div>



<!--display table starting player -->


<?php include_once "includes/connection.php";
$sql="select * from player";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="ptable">

  <thead class="thead-dark">
    <tr>
      <th>PID</th>
      <th>PRANK</th>
      <th>PTEAM</th>
      <th>PNAME</th>
      <th>PAGE</th>
      <th>PJOB</th>
      <th>PAVG</th>
      <th>PSR</th>
      <th>PTR</th>
      <th>PTMATCHES</th>
      <th>PTOURNAMENTS</th>
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo $row['pid']; ?></td>
        <td><?php echo $row['prank']; ?></td>
        <td><?php echo strtoupper($row['pteam']); ?></td>
        <td><?php echo strtoupper($row['pname']); ?></td>
        <td><?php echo $row['page']; ?></td>
        <td><?php echo strtoupper($row['pjob']); ?></td>
        <td><?php echo $row['pavg']; ?></td>
        <td><?php echo $row['psr']; ?></td>
        <td><?php echo $row['ptr']; ?></td>
        <td><?php echo $row['ptmatches']; ?></td>
        <td><?php echo $row['pttournaments']; ?></td>
      </tr>
    <?php }
  } ?>
  </table>
</div>

<!--display Team starting-->
<?php include_once "includes/connection.php";
$sql="select * from team";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="ttable">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>COUNTRY</th>
      <th>Name</th>
      <th>CAPTAIN</th>
      <th>VICE CAPTAIN</th>
      <th>COACH</th>
      <th>Matches Won</th>
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo $row['tid']; ?></td>
        <td><?php echo strtoupper($row['tcountry']); ?></td>
        <td><?php echo strtoupper($row['tname']); ?></td>
        <td><?php echo strtoupper($row['cname']); ?></td>
        <td><?php echo strtoupper($row['vname']); ?></td>
        <td><?php echo strtoupper($row['coname']); ?></td>
        <td><?php echo strtoupper($row['won']); ?></td>
      </tr>
    <?php }
  } ?>
  </table>
</div>



<!--display starting matchup-->
<?php include_once "includes/connection.php";
$sql="select * from matchup";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="mtable">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Team1</th>
      <th>Team2</th>
      <th>Pridiction</th>

    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo $row['mid']; ?></td>
        <td><?php echo strtoupper($row['t1name']); ?></td>
        <td><?php echo strtoupper($row['t2name']); ?></td>
        <td><?php echo strtoupper($row['mpredict']); ?></td>

      </tr>
    <?php }
  } ?>
  </table>
</div>

<!--display starting stats-->
<?php include_once "includes/connection.php";
$sql="select * from statistics";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="stable">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Match ID</th>

      <th>Winner</th>
      <th>Win By</th>

    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {?>
      <tr>
        <td><?php echo strtoupper($row['sid']); ?></td>
        <td><?php echo strtoupper($row['mid']); ?></td>

        <td><?php echo strtoupper($row['swname']); ?></td>
        <td><?php echo strtoupper($row['swinby']); ?></td>

      </tr>
    <?php }
  } ?>
  </table>
</div>


<!--display starting tickets-->
<?php include_once "includes/connection.php";
$sql="select * from tickets";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

?>
<div class="container-fluid" >

  <table class="table-hover table-success table-bordered mytable" id="titable">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Match ID</th>
      <th>Venue</th>
      <th>Time</th>
      <th>Price</th>
      <th>Match</th>
    </tr>
  </thead>
    <?php
    if ($resultcheck>0) {
       while ($row=mysqli_fetch_assoc($result)) {
         $mid=$row['ttmid'];?>

      <tr>
        <td><?php echo strtoupper($row['ttid']); ?></td>
        <td><?php echo strtoupper($row['ttmid']);?></td>
        <td><?php echo strtoupper($row['ttvenue']); ?></td>
        <td><?php echo strtoupper($row['tttime']); ?></td>
        <td><?php echo strtoupper($row['ttprice']); ?></td>
        <td><?php
                  $s1="select * from matchup where mid='$mid'";
                  $r1=mysqli_query($conn,$s1);
                  $rs1=mysqli_num_rows($result);
                  if ($rs1>0) {
                    while ($r=mysqli_fetch_assoc($r1)) {
                      echo strtoupper($r['t1name']);
                      echo " VS ";
                      echo strtoupper($r['t2name']);
                    }
                  }
         ?></td>
      </tr>
    <?php }
  } ?>
  </table>
</div>
<div class="sql">
  <table class="table-hover table-success table-bordered mytable" id="titable">
    <tr>
      <th>TEAM</th>
      <th>POINTS</th>
    </tr>
  <?php
  $s1="call maximum();";
  $result1=mysqli_query($conn,$s1);
  $resultcheck1=mysqli_num_rows($result1);

  if($resultcheck1>0)
  {
    while($r=mysqli_fetch_assoc($result1)){
      ?>

        <tr>
          <td><?php echo $r['tname']; ?></td>
          <td><?php echo $r['won']; ?></td>
        </tr>

  <?php
    }
  }
  ?>
    </table>

</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
