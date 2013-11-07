<?php
use \TYPO3\Surf\Domain\Model\Workflow;
use \TYPO3\Surf\Domain\Model\Node;
use \TYPO3\Surf\Domain\Model\SimpleWorkflow;

$application = new \Famelo\Surf\SharedHosting\Application\Flow();
$application->setOption('repositoryUrl', 'git://github.com/famelo/Satisfy.git');
$application->setDeploymentPath('/html/typo3.flow');
$application->setOption('keepReleases', 3);

$application->setOption('defaultContext', 'Production');
$application->setOption('composerCommandPath', '/html/composer.phar');
$application->setHosting('Mittwald');

$deployment->addApplication($application);

$workflow = new SimpleWorkflow();
// $workflow->setEnableRollback(FALSE);

$workflow
	->afterTask('typo3.surf:typo3:flow:copyconfiguration', array(
		'famelo.surf.sharedhosting:downloadbeard',
		'famelo.surf.sharedhosting:beardpatch'
	), $application);

$deployment->setWorkflow($workflow);

$node = new Node('p208340.webspaceconfig.de');
$node->setHostname('p208340.webspaceconfig.de');
$node->setOption('username', 'p208340');

$application->addNode($node);
$deployment->addApplication($application);
?>