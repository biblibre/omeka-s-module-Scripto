<?php
namespace Scripto\Site\ResourcePageBlockLayout;

use Omeka\Site\ResourcePageBlockLayout\ResourcePageBlockLayoutInterface;
use Omeka\Api\Representation\AbstractResourceEntityRepresentation;
use Laminas\View\Renderer\PhpRenderer;

class ScriptoProjects implements ResourcePageBlockLayoutInterface
{
    public function getLabel() : string
    {
        return 'Scripto projects'; // @translate
    }

    public function getCompatibleResourceNames() : array
    {
        return ['items', 'media'];
    }

    public function render(PhpRenderer $view, AbstractResourceEntityRepresentation $resource) : string
    {
        return $view->partial('scripto/common/resource-page-block-layout/scripto-projects', ['resource' => $resource]);
    }
}
