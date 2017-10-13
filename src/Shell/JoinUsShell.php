<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class NewsletterSubscribeShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('JoinUsTubeTabernacle');

    while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);

          $status = $this->send($message['contact']);
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

  public function send($contact){    
     try
         {
            $email = new Email('tabernacle_main_profile');
            $email->to($contact['subscriber_email'])
            ->bcc('tabernacledallianceetdegloire@gmail.com')
            ->subject('✝️ Rejoindre TGA 🙇🏽')
            ->template('join_us','blank')
            ->emailFormat('html')
            ->setAttachments([
              'Profession de Foi' => WWW_ROOT.'files'.DS.'newsletter'.DS.'subscribe'.DS.'profession_de_foi.pdf',
            ])
            ->viewVars(['contact'=>$contact])
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}