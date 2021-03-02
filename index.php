<?php 
session_start();
ob_start();

require_once "dil.php";

$dilyaz = new dilyonetim();
$dilyaz->getir($_SESSION['dil']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>ÇOKLU DİL MANTIĞI</title>
</head>
<body>
<div  class="container text-center">
            <div class="row mt-5">
                        <div class="col-lg-12 border border-dark"><a href="index.php?dil=tr" class="btn btn-dark m-2">Türkçe</a>  <a href="index.php?dil=en" class="btn btn-dark m-2">İngilizce</a>  
                    </div>

 		  </div>


		<div class="row mt-1">
        
        <div class="col-lg-10"><?php  echo $dilyaz->veriler["icerik"];?></div>
      
        
        <div class="col-lg-2 text-left">
        <h5><?php echo $dilyaz->veriler["link1"];?></h5>
        <h5><?php echo $dilyaz->veriler["link2"];?></h5>
        <h5><?php echo $dilyaz->veriler["link3"];?></h5>
        <h5><?php echo $dilyaz->veriler["link4"];?></h5>
        </div>
        
        
  		</div>

</div>
<?php 

@$dil=$_GET['dil'];
switch ($dil) {
    case 'tr':
    case 'en':
        $_SESSION['dil']=$dil;
        header("Location:index.php");
        break;
    
    
}




 ?>




</body>
</html>