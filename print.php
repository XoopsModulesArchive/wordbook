<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package      Wordbook - a multicategory glossary
 * @since        8 May 2004
 * @author       hsalazar, XOOPS Development Team
 * @version      $Id $
 */

include 'header.php';

foreach ($_POST as $k => $v) {
    ${$k} = $v;
}

foreach ($_GET as $k => $v) {
    ${$k} = $v;
}

if (empty($entryID)) {
    redirect_header("index.php");
}

/**
 * @param $entryID
 */
function printPage($entryID)
{
    global $xoopsConfig, $xoopsDB, $xoopsModule, $xoopsModuleConfig, $myts;
    $result1 = $xoopsDB->query("SELECT * FROM " . $xoopsDB->prefix("wbentries") . " WHERE entryID = '$entryID' and submit = '0' order by datesub");
    list($entryID, $categoryID, $term, $init, $definition, $ref, $url, $uid, $submit, $datesub, $counter, $html, $smiley, $xcodes, $breaks, $block, $offline, $notifypub) = $xoopsDB->fetchrow($result1);

    $result2 = $xoopsDB->query("SELECT name FROM " . $xoopsDB->prefix("wbcategories") . " WHERE categoryID = '$categoryID'");
    list($name) = $xoopsDB->fetchRow($result2);

    $result3 = $xoopsDB->query("SELECT name, uname FROM " . $xoopsDB->prefix("users") . " WHERE uid = '$uid'");
    list($authorname, $username) = $xoopsDB->fetchRow($result3);

    $datetime     = formatTimestamp($datesub, "D, d-M-Y, H:i");
    $categoryname = $myts->htmlSpecialChars($name);
    $term         = $myts->htmlSpecialChars($term);
    $definition   = str_replace("[pagebreak]", "<br style=\"page-break-after:always;\">", $definition);
    $definition   = $myts->displayTarea($definition, $html, $smiley, $xcodes, '', $breaks);
    if ($authorname == '') {
        $authorname = $myts->htmlSpecialChars($username);
    } else {
        $authorname = $myts->htmlSpecialChars($authorname);
    }
    echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>\n";
    echo "<html>\n<head>\n";
    echo "<title>" . $xoopsConfig['sitename'] . "</title>\n";
    echo "<meta http-equiv='Content-Type' content='text/html; charset=" . _CHARSET . "' />\n";
    echo "<meta name='AUTHOR' content='" . $xoopsConfig['sitename'] . "' />\n";
    echo "<meta name='COPYRIGHT' content='Copyright (c) 2004 by " . $xoopsConfig['sitename'] . "' />\n";
    echo "<meta name='DESCRIPTION' content='" . $xoopsConfig['slogan'] . "' />\n";
    echo "<meta name='GENERATOR' content='" . XOOPS_VERSION . "' />\n\n\n";

    echo "<body bgcolor='#ffffff' text='#000000'>
            <div style='width: 650px; border: 1px solid #000; padding: 20px;'>
                <div style='text-align: center; display: block; padding-bottom: 12px; margin: 0 0 6px 0; border-bottom: 2px solid #ccc;'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/assets/images/wb_slogo.png' border='0' alt='' /><h2 style='margin: 0;'>" . $term . "</h2></div>
                <div></div>";
    if ($xoopsModuleConfig['multicats'] == 1) {
        echo "<div>" . _MD_WB_ENTRYCATEGORY . "<b>" . $categoryname . "</b></div>";
    }
    echo "<div style='padding-bottom: 6px; border-bottom: 1px solid #ccc;'>" . _MD_WB_SUBMITTER . "<b>" . $authorname . "</b></div>
                <h3 style='margin: 0;'>" . $term . "</h3>
                <p>" . $definition . "</p>
                <div style='padding-top: 12px; border-top: 2px solid #ccc;'><b>" . _MD_WB_SENT . "</b>&nbsp;" . $datetime . "<br /></div>
            </div>
            <br />
          </body>
          </html>";
}

printPage($entryID);
