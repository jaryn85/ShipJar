<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Product;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Product
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Deferred\Product $productDataProvider, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\CatalogGraphQl\Model\Resolver\Product\ProductFieldsSelector $productFieldsSelector, ?\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Deferred\ProductFactory $productDataProviderFactory = null)
    {
        $this->___init();
        parent::__construct($productDataProvider, $valueFactory, $productFieldsSelector, $productDataProviderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
