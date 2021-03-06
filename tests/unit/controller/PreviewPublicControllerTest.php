<?php
/**
 * Gallery
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <galleryapps@oparoz.com>
 *
 * @copyright Olivier Paroz 2016
 */

namespace OCA\Gallery\Controller;

require_once __DIR__ . '/PreviewControllerTest.php';

/**
 * Class PreviewPublicControllerTest
 *
 * @package OCA\Gallery\Controller
 */
class PreviewPublicControllerTest extends PreviewControllerTest {
	public function setUp() {
		parent::setUp();
		$this->controller = new PreviewPublicController(
			$this->appName,
			$this->request,
			$this->urlGenerator,
			$this->configService,
			$this->thumbnailService,
			$this->previewService,
			$this->downloadService,
			$this->eventSource,
			$this->logger
		);
	}
}
