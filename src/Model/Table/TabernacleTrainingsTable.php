<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabernacleTrainings Model
 *
 * @method \App\Model\Entity\TabernacleTraining get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabernacleTraining newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabernacleTraining[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleTraining|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabernacleTraining patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleTraining[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleTraining findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabernacleTrainingsTable extends Table
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

        $this->setTable('tabernacle_trainings');
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
            ->scalar('training_label')
            ->requirePresence('training_label', 'create')
            ->notEmpty('training_label');

        $validator
            ->dateTime('training_begin')
            ->requirePresence('training_begin', 'create')
            ->notEmpty('training_begin');

        $validator
            ->dateTime('training_end')
            ->allowEmpty('training_end');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->scalar('training_full_description')
            ->requirePresence('training_full_description', 'create')
            ->notEmpty('training_full_description');

        return $validator;
    }
}
