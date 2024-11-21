<?php

namespace Test\Module\Controller\Adminhtml\Page;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        file_put_contents(BP . '/var/log/test_module.log', "Index controller reached.\n", FILE_APPEND);

        return $this->resultPageFactory->create();
    }
}
