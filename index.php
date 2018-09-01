<html>
  <head>
    <title>Openshift Internal Load Balancing</title>      
  </head>
   
  <body>

    <?php
    $hostname = getHostName();
    $ip = gethostbyname($hostname);
    
    echo "Hostname: $hostname || IP: $ip" ;
    
    ?>
   
  </body>
</html>
