<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\events;

use craft\app\elements\Category;

/**
 * Delete category event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class DeleteCategoryEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var Category The category model associated with the event.
     */
    public $category;
}