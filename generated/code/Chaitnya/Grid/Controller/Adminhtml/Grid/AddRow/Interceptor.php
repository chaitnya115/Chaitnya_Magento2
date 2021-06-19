<?php
namespace Chaitnya\Grid\Controller\Adminhtml\Grid\AddRow;

/**
 * Interceptor class for @see \Chaitnya\Grid\Controller\Adminhtml\Grid\AddRow
 */
class Interceptor extends \Chaitnya\Grid\Controller\Adminhtml\Grid\AddRow implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Chaitnya\Grid\Model\GridFactory $gridFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $gridFactory);
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
