<?php
namespace TYPO3\Neos\Service\DataSource;

/*
 * This file is part of the TYPO3.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\TYPO3CR\Domain\Model\NodeInterface;

/**
 * Data source interface for providing generic data
 *
 * This is used in the user interface to generate dynamic option lists.
 *
 * @api
 */
interface DataSourceInterface
{
    /**
     * @return string The identifier of the data source
     * @api
     */
    public static function getIdentifier();

    /**
     * Get data
     *
     * @param NodeInterface $node The node that is currently edited (optional)
     * @param array $arguments Additional arguments (key / value)
     * @return mixed JSON serializable data
     * @api
     */
    public function getData(NodeInterface $node = null, array $arguments);
}