<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    public function home()
    {
        /*
        // Get user accounts
        FacebookSession::setDefaultApplication(FACEBOOK_APP_ID, FACEBOOK_APP_SECRET);
        $request = new FacebookRequest(
            $this->Auth->user('fb_session'),
            'GET',
            '/' . $this->Auth->user('user_id') . '/accounts'
        );
        $response = $request->execute();
        $pages = $response->getGraphObject();
        debug($pages->asArray());

        // Get page access token
        $pageId = $pages->getPropertyAsArray('data')[0]->getProperty('id');
        $pageToken = $pages->getPropertyAsArray('data')[0]->getProperty('access_token');
        debug($pageToken);

        $pageSession = new FacebookSession($pageToken);

        // Read
        $request = new FacebookRequest(
            $pageSession,
            'GET',
            '/'.$pageId.'/tabs'
        );
        $response = $request->execute();
        $pageTabs = $response->getGraphObject();
        debug($pageTabs->asArray());

        //Add
        $request = new FacebookRequest(
            $pageSession,
            'POST',
            '/'.$pageId.'/tabs',
            [
                'access_token' => $pageToken,
                'app_id' => '1592426251025309',
                'position' => 2,
                'custom_name' => 'SENSEI APP',
                'custom_image_url' => 'https://fbcdn-photos-e-a.akamaihd.net/hphotos-ak-xat1/t39.2080-0/851582_10151574615760138_1397479930_n.gif',
                'is_non_connection_landing_tab' => false
            ]
        );
        $response = $request->execute();
        $addResult = $response->getGraphObject();
        debug($addResult->asArray());

        // Change tab index
        $request = new FacebookRequest(
            $pageSession,
            'POST',
            '/1454597001504191/tabs/app_1592426251025309',
            [
                'position' => 1,
                'custom_name' => 'SENSEI APP'
            ]
        );
        $response = $request->execute();
        $addResult = $response->getGraphObject();
        debug($addResult->asArray());

        die;
        */
    }
}
