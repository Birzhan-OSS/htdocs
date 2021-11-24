<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiItem\model\compile\QtiItemCompilerAssetBlacklist(array(
    'blacklist' => array(
        '/^https?:\\/\\/(www\\.youtube\\.[a-zA-Z]*|youtu\\.be)\\//',
        '/^data:[^\\/]+\\/[^;]+(;charset=[\\w]+)?;base64,/'
    )
));
