<?php

/**
 * @file WorstPluginEverPlugin.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class WorstPluginEverPlugin
 * @brief A very badly behaved plugin.
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class WorstPluginEverPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			if ($this->getEnabled($mainContextId)) {
				DieScreaming();
			}
			return true;
		}
		return false;
	}

	/**
	 * @copydoc Plugin::getDisplayName()
	 */
	function getDisplayName() {
		return 'Worst Plugin Ever Plugin';
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		return 'This is a very badly behaved plugin.';
	}
}

