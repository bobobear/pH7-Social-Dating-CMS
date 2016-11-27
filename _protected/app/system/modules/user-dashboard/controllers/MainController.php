<?php
/**
 * @author         Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright      (c) 2016, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / User Dashboard / Controller
 */
namespace PH7;

class MainController extends Controller
{
    public function index()
    {
        $this->view->page_title = $this->view->h1_title = t('Your User Area');
        $this->design->addCss(PH7_LAYOUT . PH7_SYS . PH7_MOD . $this->registry->module . PH7_SH . PH7_TPL .
            PH7_TPL_MOD_NAME . PH7_SH . PH7_CSS, 'style.css');
        $this->design->addJs(PH7_STATIC . PH7_JS, 'Wall.js');

        $this->view->username = $this->session->get('member_username');
        $this->view->first_name = $this->session->get('member_first_name');
        $this->view->sex = $this->session->get('member_sex');
        $this->view->avatarDesign = new AvatarDesignCore; // Avatar Design Class

        $this->output();
    }
}
