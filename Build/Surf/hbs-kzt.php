<?php
use \TYPO3\Surf\Domain\Model\Workflow;
use \TYPO3\Surf\Domain\Model\Node;
use \TYPO3\Surf\Domain\Model\SimpleWorkflow;

$application = new \Famelo\Surf\SharedHosting\Application\Flow();
$application->setOption('repositoryUrl', 'git://github.com/famelo/Satisfy.git');
$application->setDeploymentPath('/html/kzt');
$application->setOption('keepReleases', 3);

// $application->setOption('defaultContext', 'Production');
// $application->setOption('composerCommandPath', 'php_cli /html/composer.phar');
// $application->setHosting('Mittwald');

// // $application->setOption('packageMethod', 'git');
// // $application->setOption('transferMethod', 'rsync');
// // $application->setOption('updateMethod', NULL);

// $deployment->addApplication($application);

$application->setOption('defaultContext', 'Production');
$application->setOption('composerCommandPath', 'composer');
$application->setHosting('Mittwald');

$application->setOption('transferMethod', 'rsync');
$application->setOption('packageMethod', 'git');
$application->setOption('updateMethod', NULL);

$deployment->addApplication($application);

$workflow = new SimpleWorkflow();
$workflow->setEnableRollback(FALSE);

$workflow
	->afterTask('typo3.surf:typo3:flow:copyconfiguration', array(
		'famelo.surf.sharedhosting:downloadbeard',
		'famelo.surf.sharedhosting:beardpatch'
	), $application);

$workflow = new SimpleWorkflow();
// $workflow->setEnableRollback(FALSE);

$workflow
	->afterTask('typo3.surf:typo3:flow:copyconfiguration', array(
		'famelo.surf.sharedhosting:downloadbeard',
		'famelo.surf.sharedhosting:beardpatch'
	), $application);

$deployment->setWorkflow($workflow);

$node = new Node('hbs-kundenzufriedenheit.de');
$node->setHostname('hbs-kundenzufriedenheit.de');
$node->setOption('username', 'p216999');

$application->addNode($node);
$deployment->addApplication($application);
?>