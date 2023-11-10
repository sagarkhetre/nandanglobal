<?php

global $wpdb;
$tablename = $wpdb->prefix."dailytip";

// Delete record
if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $wpdb->query("DELETE FROM ".$tablename." WHERE id=".$delid);
}
?>
<h1>All Entries</h1>

<table width='90%' border='1' style='border-collapse: collapse;'>
  <tr>
   <th>S.no</th>
   <th>Tip</th>
   <th>&nbsp;</th>
  </tr>
  <?php
  // Select records
  $entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id desc");
  if(count($entriesList) > 0){
    $count = 1;
    foreach($entriesList as $entry){
      $id = $entry->id;
      $tip = $entry->tip;

      echo "<tr>
      <td>".$count."</td>
      <td>".$tip."</td>
      <td><a href='?page=allentries&delid=".$id."'>Delete</a></td>
      </tr>
      ";
      $count++;
   }
 }else{
   echo "<tr><td colspan='5'>No record found</td></tr>";
 }
?>
</table>