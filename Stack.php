<?php


class Stack
{
    public $stack;
    public $binary;

    public function __construct()
    {
        $this->binary='';
        $this->stack=array();
    }

    function subtractDecimal($number){
        $arr=array();
        while ($number>0){
            $item=$number%2;
            array_push($arr,$item);
            $number=floor($number/2);
        }
        return $arr;
    }

    function convert($number){
        $list=($this->subtractDecimal($number));
        $listLength=count($list);
        for ($i=0;$i<$listLength;$i++){
            $item=array_pop($list);
            array_push($this->stack,$item);
        }
        return $this->stack;
    }

    function showBinary(){
        for ($i=0;$i<count($this->stack);$i++){
            $this->binary.=$this->stack[$i];
        }
        echo $this->binary;
    }
}

$test=new Stack();
$test->convert(45);
print_r($test->stack);
echo '<br>';
$test->showBinary();
