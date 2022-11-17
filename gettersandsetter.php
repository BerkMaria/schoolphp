<?php
class Building
{
    private $height;

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height + 1;
    }
}
$obj = new Building();
$obj->setHeight(44);
echo $obj->getHeight();