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
use Pheanstalk\Pheanstalk;
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

    public function poster(){
        if($this->request->is('ajax')){
        if($this->request->is('get')){
                 try{
                      $this->loadModel('TabernacleEvents');
                       $actual_date  = new \DateTime();
                       $format_actual_date  = $actual_date->format('Y-m-d');
                       $poster = $this->TabernacleEvents->find()
                                           ->where(['TabernacleEvents.event_begin_date >= '=>$format_actual_date])
                                           ->orWhere(['TabernacleEvents.event_end_date <= '=>$format_actual_date])
                                           ->andWhere(['TabernacleEvents.id'=>'8'])
                                           ->order(['TabernacleEvents.created'=>'asc'])
                                           ->first();

                       if($poster)
                       {
                         $begin_date = new \DateTime($poster->event_begin_date); 
                         $poster->ref_month = $begin_date->format('m');
                       }                    

                       $this->RequestHandler->renderAs($this, 'json');
                       $this->set(compact('poster'));
                       $this->set('_serialize',['poster']);
                 }catch(Exception $e){
                  throw new Exception\BadRequestException(__('Bad Request'));
                 }
         }
        }
    }

    public function faith(){
        debug('yes');
        die();
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

    public function program(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                $query_data = $this->request->query;
                        $this->loadModel('TabernacleEvents');
                    

                        $events = $this->TabernacleEvents->find()
                                                         ->order(['TabernacleEvents.event_begin_date'=>'ASC'])
                                                         ->limit(4)
                                                         ->page($query_data['page'])
                                                         ->map(function($row){
                                                            $begin_date = new \DateTime($row->event_begin_date); 
                                                            $row->ref_month = $begin_date->format('m');
                                                            return $row;
                                                       });

                        $events_count = $this->TabernacleEvents->find()->count();

                        $this->RequestHandler->renderAs($this, 'json');

                        $this->set(compact('events','events_count'));
                        $this->set('_serialize',['events','events_count']);
            }
        }
    }

    public function joinus(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                $data = $this->request->data;
                $this->loadModel('TabernacleJoinSubscribers');
                $contact = $this->TabernacleJoinSubscribers->newEntity($data);

                if(!$contact->errors())
                {
                    if($this->TabernacleJoinSubscribers->save($contact))
                    {
                        //open tube
                        $pheanstalk = new Pheanstalk('127.0.0.1');
                        $payload = ['contact'=>$contact];
                        $pheanstalk
                        ->useTube('JoinUsTubeTabernacle')
                        ->put(json_encode($payload));

                        $this->RequestHandler->renderAs($this, 'json');

                        $message = 'ok';
                        $this->set(compact('message'));
                        $this->set('_serialize',['message']);
                    }else
                    {
                      throw new Exception\BadRequestException(__('Bad Request'));
                    }
                }else
                {
                   throw new Exception\BadRequestException(__('Bad Request'));
                }

            }
        }
    }


}
