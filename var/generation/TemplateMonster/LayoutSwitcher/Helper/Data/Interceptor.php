<?php
namespace TemplateMonster\LayoutSwitcher\Helper\Data;

/**
 * Interceptor class for @see \TemplateMonster\LayoutSwitcher\Helper\Data
 */
class Interceptor extends \TemplateMonster\LayoutSwitcher\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\StoreCookieManagerInterface $storeCookieManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Framework\Data\Helper\PostHelper $postHelper, \Magento\Framework\Config\Reader\Filesystem $reader, \Magento\Framework\App\Helper\Context $context)
    {
        $this->___init();
        parent::__construct($storeCookieManager, $storeManager, $cookieMetadataFactory, $cookieManager, $httpContext, $postHelper, $reader, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        if (!$pluginInfo) {
            return parent::isEnabled();
        } else {
            return $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFrontendPanel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFrontendPanel');
        if (!$pluginInfo) {
            return parent::isFrontendPanel();
        } else {
            return $this->___callPlugins('isFrontendPanel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultLayout($type, $website = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultLayout');
        if (!$pluginInfo) {
            return parent::getDefaultLayout($type, $website);
        } else {
            return $this->___callPlugins('getDefaultLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultTheme()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultTheme');
        if (!$pluginInfo) {
            return parent::getDefaultTheme();
        } else {
            return $this->___callPlugins('getDefaultTheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultHomepage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultHomepage');
        if (!$pluginInfo) {
            return parent::getDefaultHomepage();
        } else {
            return $this->___callPlugins('getDefaultHomepage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getColorSchemes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColorSchemes');
        if (!$pluginInfo) {
            return parent::getColorSchemes();
        } else {
            return $this->___callPlugins('getColorSchemes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultColorScheme($theme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultColorScheme');
        if (!$pluginInfo) {
            return parent::getDefaultColorScheme($theme);
        } else {
            return $this->___callPlugins('getDefaultColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayoutTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayoutTypes');
        if (!$pluginInfo) {
            return parent::getLayoutTypes();
        } else {
            return $this->___callPlugins('getLayoutTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayouts($type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayouts');
        if (!$pluginInfo) {
            return parent::getLayouts($type);
        } else {
            return $this->___callPlugins('getLayouts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayoutMetadata($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayoutMetadata');
        if (!$pluginInfo) {
            return parent::getLayoutMetadata($id);
        } else {
            return $this->___callPlugins('getLayoutMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentLayout($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentLayout');
        if (!$pluginInfo) {
            return parent::getCurrentLayout($type);
        } else {
            return $this->___callPlugins('getCurrentLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentColorScheme($theme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentColorScheme');
        if (!$pluginInfo) {
            return parent::getCurrentColorScheme($theme);
        } else {
            return $this->___callPlugins('getCurrentColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrentTheme($theme)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurrentTheme');
        if (!$pluginInfo) {
            return parent::setCurrentTheme($theme);
        } else {
            return $this->___callPlugins('setCurrentTheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentTheme()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentTheme');
        if (!$pluginInfo) {
            return parent::getCurrentTheme();
        } else {
            return $this->___callPlugins('getCurrentTheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultLayouts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultLayouts');
        if (!$pluginInfo) {
            return parent::getDefaultLayouts();
        } else {
            return $this->___callPlugins('getDefaultLayouts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayoutHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayoutHandles');
        if (!$pluginInfo) {
            return parent::getLayoutHandles();
        } else {
            return $this->___callPlugins('getLayoutHandles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpContext');
        if (!$pluginInfo) {
            return parent::setHttpContext();
        } else {
            return $this->___callPlugins('setHttpContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieLayout($type, $layout = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieLayout');
        if (!$pluginInfo) {
            return parent::setCookieLayout($type, $layout);
        } else {
            return $this->___callPlugins('setCookieLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieStore($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieStore');
        if (!$pluginInfo) {
            return parent::setCookieStore($code);
        } else {
            return $this->___callPlugins('setCookieStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieColorScheme($colorScheme)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieColorScheme');
        if (!$pluginInfo) {
            return parent::setCookieColorScheme($colorScheme);
        } else {
            return $this->___callPlugins('setCookieColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setColorSchemeContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setColorSchemeContext');
        if (!$pluginInfo) {
            return parent::setColorSchemeContext();
        } else {
            return $this->___callPlugins('setColorSchemeContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreContext');
        if (!$pluginInfo) {
            return parent::setStoreContext();
        } else {
            return $this->___callPlugins('setStoreContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieValue($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieValue');
        if (!$pluginInfo) {
            return parent::getCookieValue($name);
        } else {
            return $this->___callPlugins('getCookieValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLayoutContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayoutContext');
        if (!$pluginInfo) {
            return parent::setLayoutContext();
        } else {
            return $this->___callPlugins('setLayoutContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isThemeChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isThemeChanged');
        if (!$pluginInfo) {
            return parent::isThemeChanged();
        } else {
            return $this->___callPlugins('isThemeChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResetPostAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResetPostAction');
        if (!$pluginInfo) {
            return parent::getResetPostAction();
        } else {
            return $this->___callPlugins('getResetPostAction', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResetUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResetUrl');
        if (!$pluginInfo) {
            return parent::getResetUrl();
        } else {
            return $this->___callPlugins('getResetUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
