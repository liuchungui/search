<?include("../inc/functions.php");?>
<html>
 <head>
  <?head("Web Search Bot");?>
 </head>
 <body>
  <?headerElem();?>
  <div class="container" style="width:100px;">
   <h2>Stats</h2>
   <p>See information about the crawled URLs by DingoBot.</p>
   <h3>Total URLs Crawled</h3>
   <strong>
   <?
   $sql=$dbh->query("SELECT COUNT(id) FROM `search`");
   echo $sql->fetchColumn();
   ?>
   </strong>
   <h3>Last Crawled URL's</h3>
   <ul style="width: 400px;overflow: auto;">
   <?
   $sql=$dbh->query("SELECT `url` FROM `search` ORDER BY id DESC LIMIT 5");
   while($r=$sql->fetch()){
    echo "<li style='margin-bottom:5px;'>".$r['url']."</li>";
   }
   ?>
   </ul>
   <p>Crawler Runs Every Minute and Stats are updated each minute.</p>
  </div>
  <?footer();?>
 </body>
</html>
