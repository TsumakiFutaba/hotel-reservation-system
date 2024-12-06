<?php

  require('../inc/essentials.php');
  require('../inc/db_config.php');
  adminLogin();

  if(isset($_POST['add_room']))
  {
    $frm_data = filteration($_POST);

    print_r($frm_data);
  }

?>