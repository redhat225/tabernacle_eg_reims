<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabernacleJoinSubscribers Model
 *
 * @method \App\Model\Entity\TabernacleJoinSubscriber get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleJoinSubscriber findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabernacleJoinSubscribersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tabernacle_join_subscribers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('subscriber_fullname')
            ->requirePresence('subscriber_fullname', 'create')
            ->notEmpty('subscriber_fullname');

        $validator
            ->scalar('subscriber_email')
            ->requirePresence('subscriber_email', 'create')
            ->notEmpty('subscriber_email');

        $validator
            ->scalar('subscriber_contact')
            ->requirePresence('subscriber_contact', 'create')
            ->notEmpty('subscriber_contact');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }
}
