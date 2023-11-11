<?php

$goll('default.header');
$goll('components.navbar');

?>

<div class="comtainer">
    <h1>Main page</h1>
    <?php
        echo 'hello world';
        echo "<br />";
        var_dump($data);
    ?>
</div>

<?php

$goll('default.footer');

?>