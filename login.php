
<?php

 include "head.php";



$account = $_GET['accType'];

//echo $account;

$link = $account.'Form'.'.php';

//echo $link;


?>



	<br>
	<br>


<form method="POST" action="login.php">

  <div class="form-group row">
    
    <div class="col-sm-10">
      <input type="text" class="form-control-sm" id="colFormLabelSm" placeholder="AHIS ID">
    </div>
  </div>
  <div class="form-group row">

    <div class="col-sm-10">

      <input type="password" class="form-control-sm" id="colFormLabel" placeholder="4 digit PIN">
    </div>

  </div>
  <div class="form-group row">
    <div class="col-sm-10">


      <button type="submit" class="btn btn-primary" id="login" name="login">login</button>


    </div>

</div>


  <div class="form-group row">
    <div class="col-sm-10">


      <a href="./<?php echo $link ?>"><button type="button" name="register"> Register </button> </a>

      <a href="" class="btn btn-link">Forgot AHIS/PIN</a>


    </div>

</div>


 <div class="form-group row">
    <div class="col-sm-10">


    


    </div>

</div>




  </div>
</form>


<?php

if(isset($_POST['login']))
{
  echo "Clicked!";
  switch ($account) {

    case 'doctor':
    $id = 'dId';
    break;
    
    case 'patient':
    $id = 'pId';
    break;

    case 'pharmacy':
    $id = 'phId';
    break;
  
    
    default:

      break;
  }

  echo $id;

}


    
 
?>



















<?php include "foot.php"; ?>

