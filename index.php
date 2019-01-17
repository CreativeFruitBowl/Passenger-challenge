<?php

/**
 * Setup templating system (Twig)
 *
 * @package     challenge
 * @author      Andi North <andi@mangopear.co.uk>
 * @copyright  	2019 Andi North
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @since       1.0.0
 * @version     1.0.0
 */


/**
 * CONTENTS
 *
 * [1]  Fetch Twig from Composer
 * [2]	Setup Twig options
 * [3]	Render with Twig
 */


/**
 * [1]	Fetch Twig from Composer
 */

require_once 'vendor/autoload.php';





/**
 * [2]	Setup Twig options
 */

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);





/**
 * [3]	Render with Twig
 */

$articles_json = file_get_contents('https://gist.githubusercontent.com/dave1010/2406d86cea97da020ef1bb9f13eb8eec/raw/f4d32185f91e830f8ee41d137056ccd1e373fa90/news.json');
$articles = json_decode($articles_json, true);

echo $twig->render('index.html', ['articles' => $articles]);


?>