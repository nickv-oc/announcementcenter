<?php
/**
 * @author Joas Schilling <nickvergessen@owncloud.com>
 *
 * @copyright Copyright (c) 2016, Joas Schilling <nickvergessen@owncloud.com>
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCA\AnnouncementCenter\Tests\Unit;

class RoutesTest extends TestCase {
	public function testRoutes() {
		$routes = include(__DIR__ . '/../../../appinfo/routes.php');
		$this->assertIsArray($routes);
		$this->assertCount(1, $routes);
		$this->assertArrayHasKey('routes', $routes);
		$this->assertIsArray($routes['routes']);
		$this->assertGreaterThanOrEqual(1, \sizeof($routes['routes']));
	}
}
