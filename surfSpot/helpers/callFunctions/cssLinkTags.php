<?php
    //input of the respective cssLinkTag
    $cssLinkInput = $cssLink ?? '<style></style>';

    $cssLinkTagInput = "<link type='text/css' rel='stylesheet' href='$cssLinkInput' />"; 
    // css tags array that will be added to head
    $cssLinkTags[] = $cssLinkTagInput;
?>
