<?php declare(strict_types=1);

namespace BlockPlus\View\Helper;

use Laminas\View\Helper\AbstractHelper;

/**
 * View helper to get metadata for all pages of the specified type.
 */
class PagesMetadata extends AbstractHelper
{
    /**
     * Get data for all pages of the specified type in the current site.
     *
     * @param string|array $pageType
     * @return \Omeka\Api\Representation\SitePageBlockRepresentation[]
     */
    public function __invoke($pageType): array
    {
        $pageTypes = is_array($pageType) ? $pageType : [$pageType];

        $pageBlocks = [];

        // Check if the site page has the specified block.
        $site = $this->currentSite();
        $pages = $site->pages();
        foreach ($pages as $page) {
            foreach ($page->blocks() as $block) {
                // A page can belong to multiple types…
                if ($block->layout() === 'pageMetadata' && in_array($block->dataValue('type'), $pageTypes)) {
                    $pageBlocks[$page->slug()] = $block;
                    break;
                }
            }
        }

        return $pageBlocks;
    }

    protected function currentSite(): ?\Omeka\Api\Representation\SiteRepresentation
    {
        return $this->view->site ?? $this->view->site = $this->view
            ->getHelperPluginManager()
            ->get('Laminas\View\Helper\ViewModel')
            ->getRoot()
            ->getVariable('site');
    }
}
