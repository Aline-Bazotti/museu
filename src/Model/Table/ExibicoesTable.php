<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Exibicoes Model
 *
 * @method \App\Model\Entity\Exibico newEmptyEntity()
 * @method \App\Model\Entity\Exibico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Exibico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Exibico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Exibico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Exibico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Exibico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Exibico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Exibico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Exibico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Exibico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Exibico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Exibico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ExibicoesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('exibicoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('corredor')
            ->maxLength('corredor', 20)
            ->allowEmptyString('corredor');

        $validator
            ->integer('andar')
            ->allowEmptyString('andar');

        $validator
            ->integer('id_obra')
            ->requirePresence('id_obra', 'create')
            ->notEmptyString('id_obra');

        return $validator;
    }
}
