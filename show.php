<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Cricket</title>
    <link rel="stylesheet" href="css/show.css">
    <header class="container myheader">
      <div class="myheader-part1">
        <div class="row rowh">
          <div class="col-sm-6 msopt">CRICKET</div>
          <div class="col-sm-1 opt">HOME</div>
          <div class="col-sm-1 opt">PLAYERS</div>
          <div class="col-sm-1 opt">TICKETS</div>
          <div class="col-sm-1 opt">TEAMS</div>
          <div class="col-sm-1 opt">STATISTICS</div>
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
  <body>
    <div>
      <h1 class="h11"> upcoming matches! </h1>
    </div>

    <?php include_once "includes/connection.php";
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
<form  action="index.php" method="post">
  <div class="btnc">
    <input type="submit"  tabindex="-1" name="submit3" class="btn btns1" value="know more!">

  </div>
</form>
    </div>




    <div>
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


<div class="container full">
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
        <th style="text-align:center;">POINTS</th>
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
            <td style="text-align:center;font-size:20px;color:#333;text-style:bold;"><?php echo strtoupper($r['tname']); ?></td>
            <td style="text-align:center;"><?php echo $r['won']; ?></td>
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
    <div class="col-sm-2"></div>
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
       <a href="https://trioindia.orgfree.com" class="btn btn-light up" role="button">Website</a>

    </div>
     <div class="col-sm-1">

     </div>
  </div>
  <div class="line2"></div>
  <div class="row display-6 o1">&copy Trio India Creation</div>
</div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
