<?php

namespace Excellence\HelloWorld\Controller\Index;

use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $_resultPageFactory
    )
    {
        $this->resultPageFactory = $_resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}