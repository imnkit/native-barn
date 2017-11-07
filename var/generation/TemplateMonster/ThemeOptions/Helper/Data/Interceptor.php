<?php
namespace TemplateMonster\ThemeOptions\Helper\Data;

/**
 * Interceptor class for @see \TemplateMonster\ThemeOptions\Helper\Data
 */
class Interceptor extends \TemplateMonster\ThemeOptions\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\TemplateMonster\ThemeOptions\Helper\ColorScheme $colorScheme, \Magento\Framework\App\Helper\Context $context)
    {
        $this->___init();
        parent::__construct($colorScheme, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function getLogo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogo');
        if (!$pluginInfo) {
            return parent::getLogo();
        } else {
            return $this->___callPlugins('getLogo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoUrl');
        if (!$pluginInfo) {
            return parent::getLogoUrl();
        } else {
            return $this->___callPlugins('getLogoUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoWidth');
        if (!$pluginInfo) {
            return parent::getLogoWidth();
        } else {
            return $this->___callPlugins('getLogoWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoHeight');
        if (!$pluginInfo) {
            return parent::getLogoHeight();
        } else {
            return $this->___callPlugins('getLogoHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoAlt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoAlt');
        if (!$pluginInfo) {
            return parent::getLogoAlt();
        } else {
            return $this->___callPlugins('getLogoAlt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWelcome()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWelcome');
        if (!$pluginInfo) {
            return parent::getWelcome();
        } else {
            return $this->___callPlugins('getWelcome', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFavicon()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFavicon');
        if (!$pluginInfo) {
            return parent::getFavicon();
        } else {
            return $this->___callPlugins('getFavicon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFaviconUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFaviconUrl');
        if (!$pluginInfo) {
            return parent::getFaviconUrl();
        } else {
            return $this->___callPlugins('getFaviconUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSiteTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSiteTitle');
        if (!$pluginInfo) {
            return parent::getSiteTitle();
        } else {
            return $this->___callPlugins('getSiteTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultDescription');
        if (!$pluginInfo) {
            return parent::getDefaultDescription();
        } else {
            return $this->___callPlugins('getDefaultDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultKeywords()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultKeywords');
        if (!$pluginInfo) {
            return parent::getDefaultKeywords();
        } else {
            return $this->___callPlugins('getDefaultKeywords', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCopyright()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCopyright');
        if (!$pluginInfo) {
            return parent::getCopyright();
        } else {
            return $this->___callPlugins('getCopyright', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentColorScheme($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentColorScheme');
        if (!$pluginInfo) {
            return parent::getCurrentColorScheme($store);
        } else {
            return $this->___callPlugins('getCurrentColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getColorScheme($website = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColorScheme');
        if (!$pluginInfo) {
            return parent::getColorScheme($website);
        } else {
            return $this->___callPlugins('getColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryColor');
        if (!$pluginInfo) {
            return parent::getPrimaryColor($store, $scheme);
        } else {
            return $this->___callPlugins('getPrimaryColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSecondaryColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSecondaryColor');
        if (!$pluginInfo) {
            return parent::getSecondaryColor($store, $scheme);
        } else {
            return $this->___callPlugins('getSecondaryColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundColor');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundColor($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isBodyBackgroundImage($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isBodyBackgroundImage');
        if (!$pluginInfo) {
            return parent::isBodyBackgroundImage($store, $scheme);
        } else {
            return $this->___callPlugins('isBodyBackgroundImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundImage($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundImage');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundImage($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundImagePosition($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundImagePosition');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundImagePosition($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundImagePosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundImageRepeat($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundImageRepeat');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundImageRepeat($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundImageRepeat', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundImageSize($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundImageSize');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundImageSize($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundImageSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyBackgroundImageAttachment($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBodyBackgroundImageAttachment');
        if (!$pluginInfo) {
            return parent::getBodyBackgroundImageAttachment($store, $scheme);
        } else {
            return $this->___callPlugins('getBodyBackgroundImageAttachment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaderBackgroundColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaderBackgroundColor');
        if (!$pluginInfo) {
            return parent::getHeaderBackgroundColor($store, $scheme);
        } else {
            return $this->___callPlugins('getHeaderBackgroundColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundColor');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundColor($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFooterBackgroundImage($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFooterBackgroundImage');
        if (!$pluginInfo) {
            return parent::isFooterBackgroundImage($store, $scheme);
        } else {
            return $this->___callPlugins('isFooterBackgroundImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundImage($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundImage');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundImage($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundImagePosition($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundImagePosition');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundImagePosition($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundImagePosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundImageRepeat($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundImageRepeat');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundImageRepeat($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundImageRepeat', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundImageSize($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundImageSize');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundImageSize($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundImageSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFooterBackgroundImageAttachment($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFooterBackgroundImageAttachment');
        if (!$pluginInfo) {
            return parent::getFooterBackgroundImageAttachment($store, $scheme);
        } else {
            return $this->___callPlugins('getFooterBackgroundImageAttachment', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryFontFamily()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryFontFamily');
        if (!$pluginInfo) {
            return parent::getPrimaryFontFamily();
        } else {
            return $this->___callPlugins('getPrimaryFontFamily', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSecondaryFontFamily()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSecondaryFontFamily');
        if (!$pluginInfo) {
            return parent::getSecondaryFontFamily();
        } else {
            return $this->___callPlugins('getSecondaryFontFamily', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryFontSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryFontSize');
        if (!$pluginInfo) {
            return parent::getPrimaryFontSize();
        } else {
            return $this->___callPlugins('getPrimaryFontSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryLineHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryLineHeight');
        if (!$pluginInfo) {
            return parent::getPrimaryLineHeight();
        } else {
            return $this->___callPlugins('getPrimaryLineHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryFontColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryFontColor');
        if (!$pluginInfo) {
            return parent::getPrimaryFontColor($store, $scheme);
        } else {
            return $this->___callPlugins('getPrimaryFontColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryLinkColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryLinkColor');
        if (!$pluginInfo) {
            return parent::getPrimaryLinkColor($store, $scheme);
        } else {
            return $this->___callPlugins('getPrimaryLinkColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryTitleColor($store = null, $scheme = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryTitleColor');
        if (!$pluginInfo) {
            return parent::getPrimaryTitleColor($store, $scheme);
        } else {
            return $this->___callPlugins('getPrimaryTitleColor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isStickyMenu()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStickyMenu');
        if (!$pluginInfo) {
            return parent::isStickyMenu();
        } else {
            return $this->___callPlugins('isStickyMenu', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTopLinksPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTopLinksPosition');
        if (!$pluginInfo) {
            return parent::getTopLinksPosition();
        } else {
            return $this->___callPlugins('getTopLinksPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrencyPosition');
        if (!$pluginInfo) {
            return parent::getCurrencyPosition();
        } else {
            return $this->___callPlugins('getCurrencyPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguagePosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLanguagePosition');
        if (!$pluginInfo) {
            return parent::getLanguagePosition();
        } else {
            return $this->___callPlugins('getLanguagePosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShowSocialLinks($position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShowSocialLinks');
        if (!$pluginInfo) {
            return parent::getShowSocialLinks($position);
        } else {
            return $this->___callPlugins('getShowSocialLinks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageIcon($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageIcon');
        if (!$pluginInfo) {
            return parent::getImageIcon($section);
        } else {
            return $this->___callPlugins('getImageIcon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFontIcon($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFontIcon');
        if (!$pluginInfo) {
            return parent::getFontIcon($section);
        } else {
            return $this->___callPlugins('getFontIcon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSocialPosition($section)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSocialPosition');
        if (!$pluginInfo) {
            return parent::getSocialPosition($section);
        } else {
            return $this->___callPlugins('getSocialPosition', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isWishlist()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isWishlist');
        if (!$pluginInfo) {
            return parent::isWishlist();
        } else {
            return $this->___callPlugins('isWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCompare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCompare');
        if (!$pluginInfo) {
            return parent::isCompare();
        } else {
            return $this->___callPlugins('isCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isRecentlyViewed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRecentlyViewed');
        if (!$pluginInfo) {
            return parent::isRecentlyViewed();
        } else {
            return $this->___callPlugins('isRecentlyViewed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isRecentlyCompared()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRecentlyCompared');
        if (!$pluginInfo) {
            return parent::isRecentlyCompared();
        } else {
            return $this->___callPlugins('isRecentlyCompared', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOrders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOrders');
        if (!$pluginInfo) {
            return parent::isOrders();
        } else {
            return $this->___callPlugins('isOrders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPathHomePage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathHomePage');
        if (!$pluginInfo) {
            return parent::getPathHomePage();
        } else {
            return $this->___callPlugins('getPathHomePage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isShowSocialLinks($position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShowSocialLinks');
        if (!$pluginInfo) {
            return parent::isShowSocialLinks($position);
        } else {
            return $this->___callPlugins('isShowSocialLinks', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryThumbWidth($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryThumbWidth');
        if (!$pluginInfo) {
            return parent::getCategoryThumbWidth($viewType);
        } else {
            return $this->___callPlugins('getCategoryThumbWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryThumbHeight($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryThumbHeight');
        if (!$pluginInfo) {
            return parent::getCategoryThumbHeight($viewType);
        } else {
            return $this->___callPlugins('getCategoryThumbHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryThumbRatio($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryThumbRatio');
        if (!$pluginInfo) {
            return parent::getCategoryThumbRatio($viewType);
        } else {
            return $this->___callPlugins('getCategoryThumbRatio', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryColumnsNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryColumnsNumber');
        if (!$pluginInfo) {
            return parent::getCategoryColumnsNumber();
        } else {
            return $this->___callPlugins('getCategoryColumnsNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHoverType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHoverType');
        if (!$pluginInfo) {
            return parent::getHoverType();
        } else {
            return $this->___callPlugins('getHoverType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHoverTypeThumbWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHoverTypeThumbWidth');
        if (!$pluginInfo) {
            return parent::getHoverTypeThumbWidth();
        } else {
            return $this->___callPlugins('getHoverTypeThumbWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHoverTypeThumbHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHoverTypeThumbHeight');
        if (!$pluginInfo) {
            return parent::getHoverTypeThumbHeight();
        } else {
            return $this->___callPlugins('getHoverTypeThumbHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSlidesCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSlidesCount');
        if (!$pluginInfo) {
            return parent::getSlidesCount();
        } else {
            return $this->___callPlugins('getSlidesCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryShowSwatches($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryShowSwatches');
        if (!$pluginInfo) {
            return parent::getCategoryShowSwatches($viewType);
        } else {
            return $this->___callPlugins('getCategoryShowSwatches', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryShowCompare($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryShowCompare');
        if (!$pluginInfo) {
            return parent::getCategoryShowCompare($viewType);
        } else {
            return $this->___callPlugins('getCategoryShowCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryShowWishlist($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryShowWishlist');
        if (!$pluginInfo) {
            return parent::getCategoryShowWishlist($viewType);
        } else {
            return $this->___callPlugins('getCategoryShowWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryShowReviews($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryShowReviews');
        if (!$pluginInfo) {
            return parent::getCategoryShowReviews($viewType);
        } else {
            return $this->___callPlugins('getCategoryShowReviews', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryShowDesc($viewType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryShowDesc');
        if (!$pluginInfo) {
            return parent::getCategoryShowDesc($viewType);
        } else {
            return $this->___callPlugins('getCategoryShowDesc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowStock');
        if (!$pluginInfo) {
            return parent::isProductShowStock();
        } else {
            return $this->___callPlugins('isProductShowStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductShowSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductShowSku');
        if (!$pluginInfo) {
            return parent::getProductShowSku();
        } else {
            return $this->___callPlugins('getProductShowSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowCompare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowCompare');
        if (!$pluginInfo) {
            return parent::isProductShowCompare();
        } else {
            return $this->___callPlugins('isProductShowCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowWishlist()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowWishlist');
        if (!$pluginInfo) {
            return parent::isProductShowWishlist();
        } else {
            return $this->___callPlugins('isProductShowWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowEmailFiend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowEmailFiend');
        if (!$pluginInfo) {
            return parent::isProductShowEmailFiend();
        } else {
            return $this->___callPlugins('isProductShowEmailFiend', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowReviews()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowReviews');
        if (!$pluginInfo) {
            return parent::isProductShowReviews();
        } else {
            return $this->___callPlugins('isProductShowReviews', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductShowShortDesc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductShowShortDesc');
        if (!$pluginInfo) {
            return parent::getProductShowShortDesc();
        } else {
            return $this->___callPlugins('getProductShowShortDesc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowRelated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowRelated');
        if (!$pluginInfo) {
            return parent::isProductShowRelated();
        } else {
            return $this->___callPlugins('isProductShowRelated', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailRelatedLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailRelatedLimit');
        if (!$pluginInfo) {
            return parent::getProductDetailRelatedLimit();
        } else {
            return $this->___callPlugins('getProductDetailRelatedLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isProductShowRelatedCheckbox()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductShowRelatedCheckbox');
        if (!$pluginInfo) {
            return parent::isProductShowRelatedCheckbox();
        } else {
            return $this->___callPlugins('isProductShowRelatedCheckbox', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailRelatedImageHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailRelatedImageHeight');
        if (!$pluginInfo) {
            return parent::getProductDetailRelatedImageHeight();
        } else {
            return $this->___callPlugins('getProductDetailRelatedImageHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailRelatedImageWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailRelatedImageWidth');
        if (!$pluginInfo) {
            return parent::getProductDetailRelatedImageWidth();
        } else {
            return $this->___callPlugins('getProductDetailRelatedImageWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isShowProductDetailUpsell()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShowProductDetailUpsell');
        if (!$pluginInfo) {
            return parent::isShowProductDetailUpsell();
        } else {
            return $this->___callPlugins('isShowProductDetailUpsell', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailUpsellLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailUpsellLimit');
        if (!$pluginInfo) {
            return parent::getProductDetailUpsellLimit();
        } else {
            return $this->___callPlugins('getProductDetailUpsellLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailUpsellImageHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailUpsellImageHeight');
        if (!$pluginInfo) {
            return parent::getProductDetailUpsellImageHeight();
        } else {
            return $this->___callPlugins('getProductDetailUpsellImageHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailUpsellImageWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailUpsellImageWidth');
        if (!$pluginInfo) {
            return parent::getProductDetailUpsellImageWidth();
        } else {
            return $this->___callPlugins('getProductDetailUpsellImageWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsDesc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsDesc');
        if (!$pluginInfo) {
            return parent::getProductTabsDesc();
        } else {
            return $this->___callPlugins('getProductTabsDesc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsAdditional()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsAdditional');
        if (!$pluginInfo) {
            return parent::getProductTabsAdditional();
        } else {
            return $this->___callPlugins('getProductTabsAdditional', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsReview()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsReview');
        if (!$pluginInfo) {
            return parent::getProductTabsReview();
        } else {
            return $this->___callPlugins('getProductTabsReview', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsDescTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsDescTitle');
        if (!$pluginInfo) {
            return parent::getProductTabsDescTitle();
        } else {
            return $this->___callPlugins('getProductTabsDescTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsAdditionalTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsAdditionalTitle');
        if (!$pluginInfo) {
            return parent::getProductTabsAdditionalTitle();
        } else {
            return $this->___callPlugins('getProductTabsAdditionalTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTabsReviewTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTabsReviewTitle');
        if (!$pluginInfo) {
            return parent::getProductTabsReviewTitle();
        } else {
            return $this->___callPlugins('getProductTabsReviewTitle', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductGalleryImgWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductGalleryImgWidth');
        if (!$pluginInfo) {
            return parent::getProductGalleryImgWidth();
        } else {
            return $this->___callPlugins('getProductGalleryImgWidth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductGalleryImgHeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductGalleryImgHeight');
        if (!$pluginInfo) {
            return parent::getProductGalleryImgHeight();
        } else {
            return $this->___callPlugins('getProductGalleryImgHeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prefixPathWithColorScheme($path, $scheme)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prefixPathWithColorScheme');
        if (!$pluginInfo) {
            return parent::prefixPathWithColorScheme($path, $scheme);
        } else {
            return $this->___callPlugins('prefixPathWithColorScheme', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductItemWidth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductItemWidth');
        if (!$pluginInfo) {
            return parent::getProductItemWidth();
        } else {
            return $this->___callPlugins('getProductItemWidth', func_get_args(), $pluginInfo);
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
