<?php
namespace Pulsestorm\TutorialVirtualType\Traits;
trait ObjectReport
{
    protected $output;
    protected function output($string)
    {
        $this->output->writeln($string);
    } 
    
    protected function reportOnVariable($name, $thing)
    {
        $this->output('The Property $' . $name);
        $type = gettype($thing);
        $aoran   = $this->getAOrAn($type);
        $this->output('  is '.$aoran.' ' . $type);
        call_user_func([$this,'outputValueOf'.ucwords($type)],$thing);
        $this->output('');        
    }  

    protected function getAOrAn($string)
    {
        if(in_array($string[0], ['a','e','i','o','u']))
        {
            return 'an';
        }
        return 'a';
    }

    protected function outputValueOfObject($thing)
    {
        $this->output('  created with the class: ');
        $this->output('  ' . get_class($thing));
        
    }

    protected function outputValueOfString($thing)
    {
        $this->output('  with a value of: ' . $thing);
    }    
    
    protected function outputValueOfInteger($thing)
    {
        $this->output('  with a value of: ' . $thing);
    }    
    
    protected function outputValueOfBoolean($thing)
    {
        $this->output('  with a value of: ' . ($thing ? 'true' : 'false'));
    }        

    protected function outputValueOfArray($thing)
    {
        $this->output('  with the elements: ');
        foreach($thing as $key=>$value)
        {
            $this->output('  ' . $key . '=>' . $value);
        }
    }                

}