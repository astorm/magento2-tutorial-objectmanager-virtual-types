<?php
namespace Pulsestorm\TutorialVirtualType\Model;
class Argument1
{
    public $property_of_argument1_object;
    public function __construct(Argument2 $the_argument)
    {
        $this->property_of_argument1_object = $the_argument;
    }
}
