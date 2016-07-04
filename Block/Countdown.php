<?php
namespace Fluid\Countdown\Block;

class Countdown extends \Magento\Framework\View\Element\Template
{
    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getCountdownEnabled()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/active', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getStartDate()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/countdown_start_date', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getEndDate()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/countdown_date', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getType()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/countdown_type', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getHeadingText()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/countdown_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getSubHeadingText()
    {
        return $this->_scopeConfig->getValue('salecountdown/general/countdown_sub_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}