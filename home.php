
<!DOCTYPE html>
<html>
    <head>
		<title>| Wunderground API |</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 60px;
            padding-bottom: 40px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    
    </head>
    
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="./">APP Perkiraan Cuaca 7 hari </a>
                    <div class="nav-collapse collapse">
                        <form class="navbar-form pull-right">
                            <input class="span2" name="city" type="text" placeholder="Kota">
                            <input class="span2" name="state" type="text" placeholder="ID Negara">
                            <button type="submit" class="btn btn-success">Perkiraan Cuaca</button>
                        </form>
                    </div>
                </div>
            </div>
			</div>
			<div class="container">
 
</div>
        <div class="container">
                <?php if(empty($QueryState) || empty($QueryCity)) { ?>
                
                   Silahkan masukan kota dan id kota yang akan anda telusuri.
                
                <?php
                    } else {
                ?>
                    
            
                    
            
            
            
                <?php
                    }
                ?>
            
            
            <?php
            ?>
        </div>
    </body>
	<?php
    require 'Conditions.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>
</html>

<?php
date_default_timezone_set("Asia/Jakarta");

?>
<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <b>WAKTU SAAT INI :</b>
    <h3 id="clock">
</div>
</html>