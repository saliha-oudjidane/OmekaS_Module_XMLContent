<?php
namespace XMLContent;

use Omeka\Module\AbstractModule;

class Module extends AbstractModule
{
    public function getConfig()
    {
        return include __DIR__ . '/config/Module.config.php';
    }

   
}

?>
