<?php
// $Id: views-view-field--events--block-field-date-value.tpl.php,v 1.0.0 2010/01/06 09:00:32 SymphonyThemes Exp $
?>
<?php 
  $create_date = explode(' ',preg_replace('/<[^>]*>/i','', $output));

  print '<div class="field-created-day">'. date('d',strtotime($create_date[0])) . '</div>' . '<div class="field-created-month">' . date('D',strtotime($create_date[0])) . '</div>';
