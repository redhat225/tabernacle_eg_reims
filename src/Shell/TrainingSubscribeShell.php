<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class TrainingSubscribeShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->loadModel('ServiceSubscribers');
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('TrainingSubscribeTubeTabernacle');

    while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);

          $status = $this->send($message['training']);
          if($status)
          {
            $client->delete($job);
            $this->out('Job Delete');
          }
          else
          {
            $client->bury($job);
            $this->out('Job Burried');
          }
        
    }
  }

  public function send($training){    
     try{
            $email = new Email('tabernacle_main_profile');
            $email->to($training['subscriber_email'])
            ->bcc('tabernacledallianceetdegloire@gmail.com')
            ->subject('✝️ Inscription Newsletter TGA ✉️')
            ->template('training_subscribe','blank')
            ->emailFormat('html')
            ->viewVars(['training'=>$training])
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}