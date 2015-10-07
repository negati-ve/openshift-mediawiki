<?php

$wgAutoloadClasses['OpenshiftMediawikiIpFixHooks'] = __DIR__ . '/OpenshiftMediawikiIpFixHooks.php';

$wgHooks['GetIP'][] = 'OpenshiftMediawikiIpFixHooks::onGetIP';

?>