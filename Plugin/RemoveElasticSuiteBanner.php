<?php

declare(strict_types=1);

namespace Team23\RemoveElasticSuiteBanner\Plugin;

use Smile\ElasticsuiteCore\Model\System\Message\NotificationAboutVersions;

/**
 * Class RemoveElasticSuiteBanner
 *
 * Remove the ElasticSuite banner notification from top of backend messages.
 */
class RemoveElasticSuiteBanner
{
    /**
     * Prevent notification being displayed
     *
     * @param NotificationAboutVersions $subject
     * @param bool $result
     * @return bool
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterIsDisplayed(NotificationAboutVersions $subject, bool $result): bool
    {
        return false;
    }
}
