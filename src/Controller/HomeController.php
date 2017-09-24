<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Network\Exception;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{

    public function initialize(){
        parent::initialize();
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);;

        if(!$this->request->is('ajax'))
        {

            if(!$this->Cookie->check('banner'))
            {
                $this->Cookie->configKey('banner',[
                    'expires' => '+1 day',
                    'httpOnly' => true
                ]);

                $this->Cookie->write('banner','undone');
            }
            else
                $this->Cookie->write('banner','done');

            $this->request->params['action'] = 'index';
        }
    }

    public function frame(){
        $this->viewBuilder()->layout('frame_layout');
    }

    public function index(){

    }
    public function home(){	
    }

    public function contact(){

    }


    public function bannerState(){
        if($this->request->is('ajax')){

            try{
                $banner_state = $this->Cookie->read('banner');
                $this->RequestHandler->renderAs($this, 'json');

                $this->set(compact('banner_state'));
                $this->set('_serialize',['banner_state']);
            } catch(Exception $e){
                 throw new Exception\NotFoundException(__('Not Found'));
            }

        }
    }


}
