<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rereleasedbys Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\Rereleasedby get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rereleasedby newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rereleasedby[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rereleasedby|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rereleasedby patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rereleasedby[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rereleasedby findOrCreate($search, callable $callback = null)
 */
class RereleasedbysTable extends Table
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

        $this->table('rereleasedbys');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Games', [
            'foreignKey' => 'game_id'
        ]);
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
            ->allowEmpty('country');

        $validator
            ->allowEmpty('rereleaased_as');

        $validator
            ->allowEmpty('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
