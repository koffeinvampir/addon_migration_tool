<?php

namespace PortlandLabs\Concrete5\MigrationTool\Importer\Manager;

use PortlandLabs\Concrete5\MigrationTool\Importer\Attribute\Importer;
use PortlandLabs\Concrete5\MigrationTool\Importer\Attribute\StandardImporter;

defined('C5_EXECUTE') or die("Access Denied.");

class AttributeManager extends Manager
{

    protected function getDefaultDriver()
    {
        return new StandardImporter();
    }

    public function __construct($app)
    {
        parent::__construct($app);
        $this->extend('unmapped', function() {
            return new Importer();
        });
    }

}