<?php
namespace Magento\Email\Controller\Adminhtml\Email\Template\DefaultTemplate;

/**
 * Interceptor class for @see \Magento\Email\Controller\Adminhtml\Email\Template\DefaultTemplate
 */
class Interceptor extends \Magento\Email\Controller\Adminhtml\Email\Template\DefaultTemplate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Email\Model\Template\Config $emailConfig, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $emailConfig, $serializer);
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
