<?php
/**
 * File containing the EzPublishCache class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

use eZ\Bundle\EzPublishCoreBundle\HttpCache;

/**
 * Class EzPublishCache
 * @deprecated in 5.4, cache extensibility is now possible via HTTP_CACHE_CLASS & CUSTOM_CLASSLOADER_FILE env variables
 */
class EzPublishCache extends HttpCache
{
}
