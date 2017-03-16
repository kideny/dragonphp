<?php
/**
 * Qaytmaydi : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://Qaytmaydi.com Qaytmaydi Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Qaytmaydi\Cli\Tasks;

use Phalcon\CLI\Task;
use Qaytmaydi\Badges\Manager as BadgesManager;

/**
 * This script processes badges for users
 */
class BadgesTask extends Task
{
    public function mainAction()
    {
        echo "\n Start processes badges for users \n";

        $badge = new BadgesManager();
        $badge->process();

        echo "\n Adding successfully \n";
    }
}