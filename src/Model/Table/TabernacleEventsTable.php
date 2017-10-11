<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabernacleEvents Model
 *
 * @method \App\Model\Entity\TabernacleEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabernacleEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabernacleEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleEvent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabernacleEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleEvent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabernacleEventsTable extends Table
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

        $this->setTable('tabernacle_events');
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
            ->scalar('event_fullname')
            ->requirePresence('event_fullname', 'create')
            ->notEmpty('event_fullname');

        $validator
            ->scalar('event_full_description')
            ->requirePresence('event_full_description', 'create')
            ->notEmpty('event_full_description');

        $validator
            ->scalar('event_location')
            ->requirePresence('event_location', 'create')
            ->notEmpty('event_location');

        $validator
            ->dateTime('event_begin_date')
            ->requirePresence('event_begin_date', 'create')
            ->notEmpty('event_begin_date');

        $validator
            ->dateTime('event_end_date')
            ->allowEmpty('event_end_date');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->scalar('event_guest')
            ->allowEmpty('event_guest');

        return $validator;
    }
}
