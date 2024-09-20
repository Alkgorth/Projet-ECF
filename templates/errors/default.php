<?php

require_once _ROOTPATH_.'\templates\head.php';
require_once _ROOTPATH_.'\templates\header.php';

?>

<?php if ($error) { ?>

    <div class="alert alert-danger text-center">
        <?=$error;?>
    </div>

<?php } ?>


<?php

require_once _ROOTPATH_.'\templates\footer.php';

?>