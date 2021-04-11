<?php

namespace Unit3\LayoutTemplate\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function execute()
    {
       $pageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       return $pageResult;
    }
}
