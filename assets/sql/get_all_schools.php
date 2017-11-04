<?php
  $sql = "SELECT * FROM `".$this->table."` 
          ORDER BY school_name ASC;";
  $result = $this->process_query($sql);
?>