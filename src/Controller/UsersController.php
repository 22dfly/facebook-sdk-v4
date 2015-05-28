<?php
namespace App\Controller;

use Cake\Routing\Router;
use Cake\Event\Event;
use Facebook\FacebookSession;
use Facebook\FacebookJavaScriptLoginHelper;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('login_redirect');
    }

    public function login()
    {
        /*
        FacebookSession::setDefaultApplication(FACEBOOK_APP_ID, FACEBOOK_APP_SECRET);
        $helper = new FacebookRedirectLoginHelper(
            Router::url(['controller' => 'users', 'action' => 'login_redirect'], true)
        );
        $this->set('login_facebook_url', $helper->getLoginUrl([
            'public_profile',
            'publish_actions',
            'manage_pages'
        ]));
        */
    }

    public function login_redirect()
    {
        FacebookSession::setDefaultApplication(FACEBOOK_APP_ID, FACEBOOK_APP_SECRET);

        $helper = new FacebookJavaScriptLoginHelper();

        $session = NULL;
        try {
            $session = $helper->getSession();
        } catch(FacebookRequestException $ex) {
            // When Facebook returns an error
        } catch(\Exception $ex) {
            // When validation fails or other local issues
        }

        if ($session) {
            $user = [
                'user_id' => $session->getUserId(),
                'access_token' => $session->getToken(),
                'fb_session' => $session
            ];
            $this->Auth->setUser($user);
            //return $this->redirect($this->Auth->redirectUrl());
            return $this->redirect(['controller' => 'pages', 'action' => 'home']);
        } else {
            $this->redirect(['action' => 'login']);
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        die;
    }
}
