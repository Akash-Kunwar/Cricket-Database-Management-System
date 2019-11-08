<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Cricket</title>
    <link rel="stylesheet" href="css/show1.css">
    <header class="container myheader">
      <div class="myheader-part1">
        <div class="row rowh">
          <div class="col-sm-6 msopt">CRICKET</div>
          <div class="col-sm-1 opt"><a href="#teams">TEAMS</a></div>
          <div class="col-sm-1 opt"><a href="#players">PLAYERS</a></div>
          <div class="col-sm-1 opt"><a href="#tickets">TICKETS</a></div>
          <div class="col-sm-2 opt">
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <p class="text-center"><a href="#" data-target="#search-form" data-toggle="modal"
                role="button" class="btn  btn-wh font-weight-bold">Search</a></p>
            </div>
            <div class="col-sm-3"></div>

          </div>
          </div>

        </div>
      </div>
    </header>
    <div class="container heroimage">

      <div class="hero-text">
        <h1>Get Live Cricket Score along with Latest News and  Rankings</h1>
        <p>The best Cricket Site to follow Live Cricket</p>
        <button>About us</button>

      </div>


    </div>


  </head>
  <div id="teams">
    <h1 class="h12">teams </h1>
    <div class="line1"></div>
  </div>
  <h1 class="para container">If everyone is moving forward together, then success takes care of itself.  </h1>


<div class="scroll container">


  <?php
  include_once "includes/connection.php";
  $sql1="select * from team;";
  $res1=mysqli_query($conn,$sql1);
  $rc1=mysqli_num_rows($res1);
  $c=0;
  if($rc1>0){
    while ($r=mysqli_fetch_assoc($res1)) {
      $c++;
      ?>
      <div class="card disp" style="width:200px">
        <?php
        if($c%2==0)
        {
        ?>


        <img class="card-img-top " src="images/team.jpg" style="height:150px"alt="Card image">
      <?php
    }elseif($c%3==0) {
      ?>
      <img class="card-img-top " src="images/team1.jpg" style="height:150px"alt="Card image">
      <?php
    }else{
      ?>
    <img class="card-img-top " src="images/team2.jpg" style="height:150px"alt="Card image">
      <?php
    } ?>
      <div class="card-body">
          <h5 class="card-title"><?php echo strtoupper($r['tname']); ?></h5>
          <p class="card-text"><?php echo "Captain : ",strtoupper($r['cname']);?></p>
          <a href="#" class="btn btn-warning"><?php echo "Matches Played : ",strtoupper($r['totalplayed']);?></a>
        </div>
      </div>
      <?php
    }
  } ?>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <p class="text-center"><a href="#" data-target="#runrate-form" data-toggle="modal"
      role="button" class="btn btn-warning btn-lg btn-wh font-weight-bold">get RunRate!</a></p>
  </div>
  <div class="col-sm-3"></div>

</div>
  <body>

    <div>
      <h1 class="h11"> upcoming matches! </h1>
    </div>

    <?php
    include_once "includes/connection.php";
    $sql="select * from matchup LIMIT 4";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    $count=4;
    ?>
    <div class="container" >
      <div class="row rowh1">


        <?php
        if ($resultcheck>0) {
           while ($row=mysqli_fetch_assoc($result)) {
             ?>
             <div class="col-sm-3 column">
               <bold class="text1"><?php echo strtoupper($row['t1name']) ; ?></bold>
               <bold class="text1"><?php echo " vs " ; ?></bold>
               <bold class="text1"><?php echo strtoupper($row['t2name']); ?></bold>

             </div>



        <?php }

      } ?>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <p class="text-center"><a href="#" data-target="#match-form" data-toggle="modal"
      role="button" class="btn btn-light btn-lg btn-wh font-weight-bold">know more!</a></p>
  </div>
  <div class="col-sm-3"></div>

</div>
    </div>




    <div id="players">
      <h1 class="h12">players </h1>
      <div class="line1"></div>
    </div>
    <h1 class="para container">Get Latest Cricket Match Score updates  Check out 2019
      Live Cricket Score of Ball by Ball  </h1>


<div class="scroll container">


    <?php
    include_once "includes/connection.php";
    $sql1="select * from player;";
    $res1=mysqli_query($conn,$sql1);
    $rc1=mysqli_num_rows($res1);
    if($rc1>0){
      while ($r=mysqli_fetch_assoc($res1)) {
        ?>
        <div class="card disp" style="width:200px">
          <img class="card-img-top " src="images/demo.jpg" style="height:150px"alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?php echo strtoupper($r['pname']); ?></h5>
            <p class="card-text"><?php echo strtoupper($r['pteam']);?></p>
            <a href="#" class="btn btn-warning"><?php echo strtoupper($r['pjob']);?></a>
          </div>
        </div>
        <?php
      }
    } ?>
</div>


<div class="container full" id="tickets">
  <div class="h123">tickets for you</div>
  <div class="line"></div>
  <div class="para1 display-2">We have collected tickets of all the domestic and international tours so that you don't have to struggle to get them</div>
<div class="scroll1">

  <?php
  include_once "includes/connection.php";
  $sql="select * from tickets;";
  $result=mysqli_query($conn,$sql);
  $resultcheck=mysqli_num_rows($result);
  if($resultcheck>0)
  {
    while ($row=mysqli_fetch_assoc($result)) {

      $mid=$row['ttmid'];
      $sql1="select t1name,t2name from matchup where mid ='$mid';";
      $result1=mysqli_query($conn,$sql1);
      while($r=mysqli_fetch_assoc($result1)){
        $t1name=$r['t1name'];
        $t2name =$r['t2name'];


  ?>

    <div class="mcon">
      <img src="images/image8.jpg" alt="venue" class="rounded img1">
      <div class="tm display-1"><?php echo strtoupper($t1name); ?>
      <?php echo " VS "; ?>
      <?php echo strtoupper($t2name) ?></div>
      <div class="tpara display-1">Venue : <?php echo strtoupper($row['ttvenue']) ?></div>
      <div class="tmatchid display-1">Matchid : <?php echo strtoupper($row['ttmid']) ?></div>
      <div class="tprice display-1">Price : <?php echo strtoupper($row['ttprice']) ?></div>
      <div class="ttime display-1">Date : <?php echo strtoupper($row['tttime'] )?></div>
      <a href="#" class="btn btn-warning"><?php echo "get ticket"?></a>
    </div>




  <?php
}
    }
  }
  ?>
  </div>



</div>


<div>
  <h1 class="h12">standings </h1>
  <div class="line1"></div>
</div>
<h1 class="para container">Get Latest Cricket Match Score updates  Check out 2019
  Live Cricket Score of Ball by Ball  </h1>

<div class="container">
  <div class="row r1">
  <div class="col-sm-5"></div>
  <div class="sql col-sm-6">
    <table class="table-hover table  mytable" id="titable">
      <tr>
        <th style="text-align:center;">TEAM</th>
        <th style="text-align:center;">CAPTAIN</th>
        <th style="text-align:center;">RANK</th>
      </tr>
    <?php
    $s1="call ranking();";
    $result1=mysqli_query($conn,$s1);
    $resultcheck1=mysqli_num_rows($result1);

    if($resultcheck1>0)
    {
      while($r=mysqli_fetch_assoc($result1)){
        ?>

          <tr>
            <td style="text-align:center;font-size:15px;color:#333;text-style:bold;"><?php echo strtoupper($r['tname']); ?></td>
            <td style="text-align:center;"><?php echo $r['cname']; ?></td>
            <td style="text-align:center;"><?php echo $r['dense_rank']; ?></td>
          </tr>

    <?php
      }
    }
    ?>
      </table>

  </div>
  <div class="col-sm-2"></div>
  </div>
</div>

<div class="blank"></div>
<div class="container footer">
  <div class="row f1">
    <div class="col-sm-1"></div>
     <div class="col-sm-3">
       <div class="About display-1">About</div>
       <div class="data">
         We strive to deliver a level of service that exceeds the expectations of our customers.

If you have any questions about our products or services, please do not hesitate to contact us.
       </div>

     </div>
     <div class="col-sm-3">
       <div class="About display-1">Contact</div>
       <div class="data">If you have any questions about our products or services, please do not hesitate to contact us.
       </div>
       <a href="https://github.com/Akash-Kunwar" class="btn btn-light" role="button">github</a>


     </div>
     <div class="col-sm-3">
       <div class="row">
         <div class="col-sm-3">
           <a href="includes/logout.php" class="btn btn-danger up" role="button">Logout</a>
         </div>
         <div class="col-sm-2"></div>
         <div class="col-sm-3">

         </div>
       </div>


    </div>

  </div>
  <div class="line2"></div>
  <div class="row display-6 o1">&copy Trio India Creation</div>
</div>
<div class="modal fade" id="search-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head">
        <div style="text-transform:uppercase; color:#000336;font-weight:bold;font-size:30px; ">Search</div>
      </div>
      <div class="modal-body">
        <form class="forms" action="includes/searcht.php" method="post">
          <input type="text" name="tname" placeholder="Team search..." class="form-control">
          <div class="row h"></div>
          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">
        </form>
        <form class="forms" action="includes/searchponruns.php" method="post">
          <input type="text" name="run" placeholder="Player search by runs..." class="form-control">
          <div class="row h"></div>
          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">
        </form>
        <form class="forms" action="includes/searchp.php" method="post">
          <input type="text" name="player" placeholder="Player search by name..." class="form-control">
          <div class="row h"></div>
          <input type="submit" name="submit" value="search" class="btn btn-warning" style="margin-bottom:5px;margin-left:25%;">
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="match-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head" >
        <div style="text-transform:uppercase; color:#000336;font-weight:bold;font-size:30px; ">Next Matches</div>
      </div>
      <div class="modal-body ">
        <?php
        include "includes/connection.php";
        $s="select * from matchup;";
        $r=mysqli_query($conn,$s);
        while($row=mysqli_fetch_assoc($r))
        {
          ?>
          <div class="card disp" style="width:200px">
            <a href="#" class="btn btn-success"><?php echo strtoupper($row['mid']);?></a>
            <img class="card-img-top " src="images/team1.jpg" style="height:150px"alt="Card image">
            <div class="card-body">
              <a href="#" class="btn btn-secondary" style="width:100%;"><?php echo strtoupper($row['t1name']);?></a>
              <p class="card-text" style="margin-left:45%; margin-top:5%;"><?php echo "VS";?></p>
              <a href="#" class="btn btn-secondary" style="width:100%;"><?php echo strtoupper($row['t2name']);?></a>
            </div>
          </div>
          <?php
        }


         ?>


      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="runrate-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header form-head" >
        <div style="text-transform:uppercase; color:blue;font-weight:bold;font-size:30px; ">RUN RATE</div>
      </div>
      <div class="modal-body ">
        <?php
        include "includes/connection.php";
        $s="select * from team;";
        $r=mysqli_query($conn,$s);
        $count=0;
        ?>
        <table class="table table-dark table-hover ">
          <thead>
            <td style="color:yellow;font-style:bold;font-size:20px;">SNO</td>
            <td style="color:yellow;font-style:bold;font-size:20px;">TEAM</td>
            <td style="color:yellow;font-style:bold;font-size:20px;">RUNRATE</td>
          </thead>

        <?php
        while($row=mysqli_fetch_assoc($r))
        {
          $count++;
          ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo strtoupper($row['tname']); ?></td>

            <td><?php echo strtoupper($row['runrate']); ?></td>

          </tr>
          <?php
        }


         ?>
</table>

      </div>
    </div>
  </div>
</div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
