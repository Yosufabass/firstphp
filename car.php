<?php
class car
{
    public $color;
    private $model;
    function setCarModel($year)
    {
        if ($year < date('Y')) {
            return $this->model = $year;
        } else {
            echo 'Invalid Year!';
        }
    }
    function getCarModel()
    {
        return $this->model;
    }
}
$carObject = new car();
$carObject->color = 'red';
$carObject->setCarModel(2020);
echo $carObject->getCarModel();
echo $carObject->color;