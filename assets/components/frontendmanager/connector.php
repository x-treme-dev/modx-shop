<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var frontendManager $frontendManager */
$frontendManager = $modx->getService('frontendmanager', 'frontendManager', $modx->getOption('frontendmanager_core_path', null, $modx->getOption('core_path') . 'components/frontendmanager/') . 'model/frontendmanager/');
$modx->lexicon->load('frontendmanager:default');

// handle request
$corePath = $modx->getOption('frontendmanager_core_path', null, $modx->getOption('core_path') . 'components/frontendmanager/');
$path = $modx->getOption('processorsPath', $frontendManager->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
