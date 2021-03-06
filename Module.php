<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZfcCrud;

use ZfcBase\Module\AbstractModule;

class Module extends AbstractModule
{
    public function getDir()
    {
        return __DIR__;
    }

    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'crud_db_mapper' => function($sm) {
                    return new Mapper\ZendDb(
                        $sm->get('Zend\Db\Adapter\Adapter')
                    );
                }
            ),
        );
    }
}
