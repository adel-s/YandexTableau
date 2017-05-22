<?php
/**
 * YandexTableau
 *
 * @file
 * @ingroup other
 * @version 1.0
 * @author Adel Sachkov
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://github.com/adel-s/YandexTableau Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['other'][] = array(
    'path' => __FILE__,
    'name' => "YandexTableau",
    'version' => '0.1',
    'author' => "[https://github.com/adel-s Adel Sachkov]",
    'descriptionmsg' => 'yandextableau-desc',
    'url' => 'https://www.mediawiki.org/wiki/Extension:YandexTableau',
    'license-name' => 'GPL-2.0+',
);

$dir = dirname( __FILE__ );
$wgMessagesDirs['YandexTableau'] = __DIR__ . '/i18n';

function addTableau ($out)
{
  global $wgLogo;
  $out->addHeadItem('meta', '<meta name="yandex-tableau-widget" content="logo=' . $wgLogo . ', color=#ffffff" />');
};

$wgHooks['BeforePageDisplay'][] = 'addTableau';
?>
