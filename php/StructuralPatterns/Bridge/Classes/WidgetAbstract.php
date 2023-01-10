<?php

class WidgetAbstract
{

    protected $realization;

    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
    }

    public function getRealization()
    {
        return $this->realization;
    }

    protected function viewLogic($viewData)
    {
        echo '<pre>';
        var_dump($viewData);
        echo '</pre>';
    }
}
