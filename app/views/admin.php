
<!-- =============================================================================================== -->
<!DOCTYPE html>
<html>

  <head>
    <?php require_once('template/header.php');?>    
    
  </head>

  <body>

    <!-- Side Navbar -->
    <?php require_once('template/sidebar.php');?>

    <!-- navbar-->
    <?php require_once('template/navbar.php');?>


      <?php if (isset($view)){

          $this->load($view, $this->viewData);

      }
      
      //echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); 
      //echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
      ?>  
 
    
  </body>

  <!-- FOOTER -->
  <?php require_once('template/footer.php');?>
  <?php isset($modal) ? include($modal) : "" ; ?>
</html>
