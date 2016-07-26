<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Budgetprices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\Budgetprice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Budgetprice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Budgetprice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Budgetprice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Budgetprice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Budgetprice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Budgetprice findOrCreate($search, callable $callback = null)
 */
class BudgetpricesTable extends Table
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

        $this->table('budgetprices');
        $this->displayField('id');
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
            ->numeric('amount')
            ->allowEmpty('amount');

        $validator
            ->allowEmpty('currency');

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
