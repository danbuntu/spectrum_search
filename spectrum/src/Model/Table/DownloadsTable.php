<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Downloads Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\Download get($primaryKey, $options = [])
 * @method \App\Model\Entity\Download newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Download[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Download|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Download patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Download[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Download findOrCreate($search, callable $callback = null)
 */
class DownloadsTable extends Table
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

        $this->table('downloads');
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
            ->allowEmpty('filename');

        $validator
            ->allowEmpty('code');

        $validator
            ->integer('size')
            ->allowEmpty('size');

        $validator
            ->integer('year')
            ->allowEmpty('year');

        $validator
            ->allowEmpty('origin');

        $validator
            ->allowEmpty('dl');

        $validator
            ->allowEmpty('type');

        $validator
            ->allowEmpty('barcode');

        $validator
            ->allowEmpty('url');

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
