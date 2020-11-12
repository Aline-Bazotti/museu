<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Obras Model
 *
 * @method \App\Model\Entity\Obra newEmptyEntity()
 * @method \App\Model\Entity\Obra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Obra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Obra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Obra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Obra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Obra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Obra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Obra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Obra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Obra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Obra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Obra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ObrasTable extends Table
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

        $this->setTable('obras');
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->integer('id_artista')
            ->allowEmptyString('id_artista');

        $validator
            ->date('data_obra')
            ->allowEmptyDate('data_obra');

        $validator
            ->scalar('tecnica')
            ->maxLength('tecnica', 100)
            ->allowEmptyString('tecnica');

        $validator
            ->scalar('dimensoes')
            ->maxLength('dimensoes', 50)
            ->allowEmptyString('dimensoes');

        $validator
            ->scalar('aquisicao')
            ->maxLength('aquisicao', 50)
            ->allowEmptyString('aquisicao');

        $validator
            ->integer('id_categoria')
            ->allowEmptyString('id_categoria');

        $validator
            ->scalar('status')
            ->maxLength('status', 1)
            ->allowEmptyString('status');

        return $validator;
    }
}
