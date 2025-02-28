<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2020 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OCA\Contacts\Listener;

use OCA\Contacts\AppInfo\Application;
use OCA\Files\Event\LoadAdditionalScriptsEvent;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;
use OCP\Util;

class LoadContactsFilesActions implements IEventListener {
	public function handle(Event $event): void {
		if (!($event instanceof LoadAdditionalScriptsEvent)) {
			return;
		}

		Util::addStyle(Application::APP_ID, 'contacts-index');
		Util::addStyle(Application::APP_ID, 'contacts-files-action');

		// only available since Nc 28
		if (method_exists(Util::class, 'addInitScript')) {
			Util::addInitScript(Application::APP_ID, 'contacts-files-action');
		} else {
			Util::addScript(Application::APP_ID, 'contacts-files-action', 'files');
		}
	}
}
