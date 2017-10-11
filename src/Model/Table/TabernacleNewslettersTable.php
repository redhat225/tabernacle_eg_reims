<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabernacleNewsletters Model
 *
 * @method \App\Model\Entity\TabernacleNewsletter get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabernacleNewsletter findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabernacleNewslettersTable extends Table
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

        $this->setTable('tabernacle_newsletters');
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
            ->scalar('newsletter_email')
            ->requirePresence('newsletter_email', 'create')
            ->notEmpty('newsletter_email');

        $validator
            ->scalar('newsletter_uuid')
            ->requirePresence('newsletter_uuid', 'create')
            ->notEmpty('newsletter_uuid');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }
}
