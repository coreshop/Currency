<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Component\Currency\Model;

use CoreShop\Component\Resource\Model\ResourceInterface;
use CoreShop\Component\Resource\Model\TimestampableInterface;

interface CurrencyInterface extends ResourceInterface, TimestampableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getIsoCode();

    /**
     * @param string $isoCode
     */
    public function setIsoCode($isoCode);

    /**
     * @return int
     */
    public function getNumericIsoCode();

    /**
     * @param int $numericIsoCode
     */
    public function setNumericIsoCode($numericIsoCode);

    /**
     * @return string
     */
    public function getSymbol();

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol);
}
