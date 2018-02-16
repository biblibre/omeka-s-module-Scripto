<?php
namespace Scripto\Form;

use Zend\Form\Form;
use Omeka\Form\Element\ItemSetSelect;
use Omeka\Form\Element\PropertySelect;

class ScriptoProjectForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'o-module-scripto:title',
            'type' => 'text',
            'options' => [
                'label' => 'Title', // @translate
                'info' => 'Enter the title of this project.', // @translate
            ],
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->add([
            'name' => 'o-module-scripto:description',
            'type' => 'textarea',
            'options' => [
                'label' => 'Description', // @translate
                'info' => 'Enter the description of this project.', // @translate
            ],
        ]);

        $this->add([
            'name' => 'o:item_set',
            'type' => ItemSetSelect::class,
            'options' => [
                'label' => 'Item set', // @translate
                'info' => 'Select the item set used to synchronize project items. Once synchronized, this project will contain every item in this item set.', // @translate
                'empty_option' => '',
            ],
            'attributes' => [
                'required' => true,
                'class' => 'chosen-select',
                'data-placeholder' => 'Select an item set', // @translate
            ],
        ]);

        $this->add([
            'name' => 'o:property',
            'type' => PropertySelect::class,
            'options' => [
                'label' => 'Property', // @translate
                'info' => 'Select the property used to store transcriptions. Scripto stores transcriptions in a wiki before they are imported. Importing will copy transcriptions from the wiki into Omeka as values of the selected property.', // @translate
                'empty_option' => '',
            ],
            'attributes' => [
                'required' => true,
                'class' => 'chosen-select',
                'data-placeholder' => 'Select a property', // @translate
            ],
        ]);

        $this->add([
            'name' => 'o:lang',
            'type' => 'text',
            'options' => [
                'label' => 'Language tag', // @translate
                'info' => 'Enter the language of the transcriptions using an IETF language tag. Note that existing property values using the same language tag will be overwritten during import.', // @translate
            ],
        ]);
    }
}