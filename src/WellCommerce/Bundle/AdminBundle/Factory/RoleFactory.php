<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AdminBundle\Factory;

use Doctrine\Common\Collections\ArrayCollection;
use WellCommerce\Bundle\AdminBundle\Entity\Role;
use WellCommerce\Bundle\CoreBundle\Factory\AbstractFactory;

/**
 * Class RoleFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class RoleFactory extends AbstractFactory
{
    /**
     * @return \WellCommerce\Bundle\AdminBundle\Entity\RoleInterface
     */
    public function create()
    {
        $role = new Role();
        $role->setName('');
        $role->setUsers(new ArrayCollection());

        return $role;
    }
}
