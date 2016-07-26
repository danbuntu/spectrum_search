<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Games Model
 *
 * @property \Cake\ORM\Association\HasMany $Additionals
 * @property \Cake\ORM\Association\HasMany $Authors
 * @property \Cake\ORM\Association\HasMany $Budgetprices
 * @property \Cake\ORM\Association\HasMany $Controls
 * @property \Cake\ORM\Association\HasMany $Downloads
 * @property \Cake\ORM\Association\HasMany $Groups
 * @property \Cake\ORM\Association\HasMany $Magazines
 * @property \Cake\ORM\Association\HasMany $Originalprices
 * @property \Cake\ORM\Association\HasMany $Otheradditionals
 * @property \Cake\ORM\Association\HasMany $Publishers
 * @property \Cake\ORM\Association\HasMany $Rereleasedbys
 * @property \Cake\ORM\Association\HasMany $Scores
 *
 * @method \App\Model\Entity\Game get($primaryKey, $options = [])
 * @method \App\Model\Entity\Game newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Game[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Game|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Game patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Game[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Game findOrCreate($search, callable $callback = null)
 */
class GamesTable extends Table
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

        $this->table('games');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Additionals', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Authors', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Budgetprices', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Controls', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Downloads', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Groups', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Magazines', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Originalprices', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Otheradditionals', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Publishers', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Rereleasedbys', [
            'foreignKey' => 'game_id'
        ]);
        $this->hasMany('Scores', [
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
            ->requirePresence('infoseekid', 'create')
            ->notEmpty('infoseekid')
            ->add('infoseekid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('type');

        $validator
            ->allowEmpty('indexDesc');

        $validator
            ->integer('version')
            ->allowEmpty('version');

        $validator
            ->allowEmpty('url');

        $validator
            ->allowEmpty('domain');

        $validator
            ->allowEmpty('path');

        $validator
            ->allowEmpty('subdomain');

        $validator
            ->allowEmpty('parenturl');

        $validator
            ->allowEmpty('anchor');

        $validator
            ->allowEmpty('found');

        $validator
            ->allowEmpty('fulltitle');

        $validator
            ->integer('yearofrelease')
            ->allowEmpty('yearofrelease');

        $validator
            ->allowEmpty('tieinlicence');

        $validator
            ->allowEmpty('machinetype');

        $validator
            ->allowEmpty('numberofplayers');

        $validator
            ->allowEmpty('messagelanguage');

        $validator
            ->allowEmpty('originalpublication');

        $validator
            ->allowEmpty('availability');

        $validator
            ->allowEmpty('protectionscheme');

        $validator
            ->allowEmpty('series');

        $validator
            ->allowEmpty('othersystems');

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
        $rules->add($rules->isUnique(['infoseekid']));

        return $rules;
    }
}
