<html>
<head>

<?php
  parse_str($_SERVER['QUERY_STRING']);
  echo '<meta property="og:description" content="'.$description.'"/>';  
  echo '<meta property="og:title" content="' . $title . '"/>';  
  echo '<meta property="og:url" content= "'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"].'"/>';
  echo '<meta property="og:image" content="'.$image.'"/>';
?>

<meta property="og:type" content="product"/>
<meta http-equiv="refresh" content="0; url=https://itunes.apple.com/app/id" />
<head><body>
</body>
</html>