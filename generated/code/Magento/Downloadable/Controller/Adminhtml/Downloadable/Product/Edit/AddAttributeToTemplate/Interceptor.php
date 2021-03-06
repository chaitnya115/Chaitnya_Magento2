<?php
namespace Magento\Downloadable\Controller\Adminhtml\Downloadable\Product\Edit\AddAttributeToTemplate;

/**
 * Interceptor class for @see \Magento\Downloadable\Controller\Adminhtml\Downloadable\Product\Edit\AddAttributeToTemplate
 */
class Interceptor extends \Magento\Downloadable\Controller\Adminhtml\Downloadable\Product\Edit\AddAttributeToTemplate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, ?\Magento\Eav\Api\Data\AttributeGroupInterfaceFactory $attributeGroupFactory = null, ?\Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository = null, ?\Magento\Catalog\Api\AttributeSetRepositoryInterface $attributeSetRepository = null, ?\Magento\Eav\Api\AttributeGroupRepositoryInterface $attributeGroupRepository = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\Eav\Api\AttributeManagementInterface $attributeManagement = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\Api\ExtensionAttributesFactory $extensionAttributesFactory = null)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $resultJsonFactory, $attributeGroupFactory, $attributeRepository, $attributeSetRepository, $attributeGroupRepository, $searchCriteriaBuilder, $attributeManagement, $logger, $extensionAttributesFactory);
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
