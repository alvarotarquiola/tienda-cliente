<?php

/**
 * @author Alex Aguilar
 * @copyright 2012
 */

require(dirname(__FILE__).'/config/config.inc.php');
require(dirname(__FILE__).'/init.php');

//$a = new Attachment(intval(Tools::getValue('id_attachment')), intval($cookie->id_lang));
$a = new Attachment(intval(Tools::getValue('id_attachment')), intval($cookie->id_lang));
$attachmentLang = ImageAttachments::getAttachmentLanguaje(intval(Tools::getValue('id_attachment')), intval($cookie->id_lang));

header('Content-Transfer-Encoding: binary');
header('Content-Type: '.$a->mime);
header('Content-Length: '.filesize(_PS_DOWNLOAD_DIR_.$attachmentLang['name_file']));
header('Content-Disposition: attachment; filename="'.utf8_decode($attachmentLang['name_file']).'"');
readfile(_PS_DOWNLOAD_DIR_.$attachmentLang['name_file']);
exit;

?>