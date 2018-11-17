<?php

if(isset($alert))
{
?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong><?=isset($alert['strongAlert'])?$alert['strongAlert']:'Erreur! '?></strong> <?= $alert['messageAlert'] ?>
</div>
<?php
}
