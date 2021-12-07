<?php declare(strict_types=1);

namespace AdvancedSearch\Service\ViewHelper;

use AdvancedSearch\View\Helper\SearchSuggesterConfirm;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class SearchSuggesterConfirmFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new SearchSuggesterConfirm($services->get('FormElementManager'));
    }
}
