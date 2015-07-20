<?php
/**
 * @author Florian Kr�mer
 * @copyright 2012 - 2015 Florian Kr�mer
 * @license MIT
 */
namespace Burzum\FileStorage\Shell;

use Cake\Console\Shell;
use Cake\Event\EventManagerTrait;

class StorageShell extends Shell {

/**
 * Tasks
 *
 * @var array
 */
	public $tasks = [
		'Burzum/FileStorage.Image'
	];

	public function main() {}

	public function getOptionParser() {
		$parser = parent::getOptionParser();
		$parser->addSubcommand('image', [
			'help' => __('Image Processing Task.'),
			'parser' => $this->Image->getOptionParser()
		]);
		return $parser;
	}
}
