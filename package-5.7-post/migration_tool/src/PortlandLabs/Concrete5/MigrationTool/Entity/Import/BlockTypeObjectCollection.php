<?php

namespace PortlandLabs\Concrete5\MigrationTool\Entity\Import;

use Doctrine\Common\Collections\ArrayCollection;
use PortlandLabs\Concrete5\MigrationTool\Importer\ContentType\Formatter\BlockTypeFormatter;
use PortlandLabs\Concrete5\MigrationTool\Importer\ContentType\Formatter\PageTemplateFormatter;

/**
 * @Entity
 */
class BlockTypeObjectCollection extends ObjectCollection
{

    /**
     * @OneToMany(targetEntity="\PortlandLabs\Concrete5\MigrationTool\Entity\Import\BlockType", mappedBy="collection", cascade={"persist", "remove"})
     **/
    public $types;

    public function __construct()
    {
        $this->types = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getTypes()
    {
        return $this->types;
    }

    public function getFormatter()
    {
        return new BlockTypeFormatter($this);
    }

    public function getType()
    {
        return 'block_type';
    }

    public function hasRecords()
    {
        return count($this->getTypes());
    }

    public function getRecords()
    {
        return $this->getTypes();
    }

    public function getTreeFormatter()
    {
        return false;
    }





}
