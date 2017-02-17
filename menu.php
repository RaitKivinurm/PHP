<?php
/**
 * created by phpstorm.
 * user: rait
 * date: 13.02.2017
 * time: 12:19
 */
$menu = new Template('menu.menu');

$menu->set('items', false); //kui kasutaja ei ole sisseloogitud, siis menuud ta ei näe
$item = new Template('menu.item');

//menüü kuvamine
$sql = 'SELECT content_id, title FROM content WHERE '.
    'parent_id="0" AND '.
    'show_in_menu="1"';
// mitte adminile näitame ainult lubatud sisu, kui hidden on 1 - nahtav ainult adminidele
if(ROLE_ID != ROLE_ADMIN) {

    $sql .= ' and is_hidden="0"';

}
$sql .= ' ORDER BY sort ASC';
$res = $db->getArray($sql);

if($res != false) {
    foreach ($res as $page) {
        $link = $http->getLink(array('page_id' => $page['content_id']));
        $item->set('link', $link);
        $item->set('name', $page['title']);
        $menu->add('items', $item->parse());

    }
}
// kui kasutaja on susteemisiseselt - kas admin voi tavakasutaja
// tekitame temale voimalus ka valja logida
if(USER_ID != ROLE_NONE) {
    $link = $http->getLink(array('act' => 'logout'));
    $item->set('link', $link);
    $item->set('name', 'Logi v&auml;lja');
    $menu->add('items', $item->parse());
}
$tmpl->set('menu', $menu->parse());
?>