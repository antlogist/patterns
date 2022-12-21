<?php

class BridgeDemo
{
    public function run()
    {
        $productRealization = new ProductWidgetRealization(new Product);
        $categoryRealization = new CategoryWidgetRealization(new Category);

        $views = [
            new WidgetBigAbstraction,
            new WidgetMiddleAbstraction,
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}
