<?php

namespace KenticoCloud\Delivery\Models\Items;

use \KenticoCloud\Delivery\ModelBinder;
use \KenticoCloud\Delivery\Models\Shared\Pagination;

/**
 * Class ContentItems
 * @package KenticoCloud\Delivery\Models\Items
 */
class ContentItems
{
    public $items = null;
    public $pagination = null;

    /**
     * ContentItems constructor.
     * @param ModelBinder $modelBinder
     * @param $obj
     */
    public function __construct(ModelBinder $modelBinder, $obj)
    {
        $this->populate($modelBinder, $obj);
        return $this;
    }

    protected function populate($modelBinder, $obj)
    {
        $properties = get_object_vars($obj);
        
        // Items
        $this->items = $modelBinder->getContentItems($properties['items'], $properties['modular_content']);

        // Pagination
        $this->pagination = $modelBinder->bindModel(Pagination::class, $properties['pagination']);

        return $this;
    }
}
