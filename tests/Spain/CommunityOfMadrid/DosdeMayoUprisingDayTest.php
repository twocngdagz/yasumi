<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Spain\CommunityOfMadrid;

use DateTime;
use DateTimeZone;

/**
 * Class containing tests for the day of Dos de Mayo Uprising in the Community of Madrid (Spain).
 */
class DosdeMayoUprisingDayTest extends CommunityOfMadridBaseTestCase
{
    /**
     * The name of the holiday to be tested
     */
    const HOLIDAY = 'dosdeMayoUprisingDay';

    /**
     * Tests the holiday defined in this test.
     */
    public function testHoliday()
    {
        $year = $this->generateRandomYear();
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime("$year-5-2", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests the translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            ['es_ES' => 'Fiesta de la Comunidad de Madrid']);
    }
}
