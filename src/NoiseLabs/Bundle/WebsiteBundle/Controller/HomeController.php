<?php
/**
 * This file is part of NoiseLabs-WebsiteBundle
 *
 * NoiseLabs-WebsiteBundle is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-WebsiteBundle is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-WebsiteBundle; if not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Copyright (C) 2012 Vítor Brandão
 *
 * @category    NoiseLabs
 * @package     WebsiteBundle
 * @copyright   (C) 2012 Vítor Brandão <noisebleed@noiselabs.org>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL-3
 * @link        http://www.noiselabs.org
 */

namespace NoiseLabs\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 */
class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template(engine="smarty")
     */
    public function indexAction()
    {
        return array();
    }
}
