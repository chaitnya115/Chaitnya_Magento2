<?php
namespace Chaitnya\Grid\Controller\Adminhtml\Grid\Save;

/**
 * Interceptor class for @see \Chaitnya\Grid\Controller\Adminhtml\Grid\Save
 */
class Interceptor extends \Chaitnya\Grid\Controller\Adminhtml\Grid\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Chaitnya\Grid\Model\GridFactory $gridFactory)
    {
        $this->___init();
        parent::__construct($context, $gridFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
