<?php

class WidgetMiddleAbstraction extends WidgetAbstract
{
    public function run(WidgetRealizationInterface $realization)
    {
        $this->setRealization($realization);

        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    private function getViewData()
    {
        $id = $this->getRealization()->getId();;
        $fullTitle = $this->getMiddleTitle();
        $description = $this->getRealization()->getDescription();
        return [$id, $fullTitle, $description];
    }

    private function getMiddleTitle()
    {
        return $this->getRealization()->getId()
            . '->' .
            $this->getRealization()->getTitle();
    }
}
