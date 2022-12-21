<?php

class WidgetBigAbstraction extends WidgetAbstract
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
        $fullTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();
        return [$id, $fullTitle, $description];
    }

    private function getFullTitle()
    {
        return $this->getRealization()->getId()
            . ':::' .
            $this->getRealization()->getTitle();
    }
}
