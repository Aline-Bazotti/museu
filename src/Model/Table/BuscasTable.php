<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Buscas Model
 *
 * @method \App\Model\Entity\Busca newEmptyEntity()
 * @method \App\Model\Entity\Busca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Busca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Busca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Busca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Busca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Busca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Busca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Busca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Busca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Busca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Busca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Busca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BuscasTable extends Table
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

        $this->setTable('buscas');
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
            ->notEmptyString('titulo');

        $validator
            ->scalar('titulo')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');    

        $validator
            ->scalar('link_view')
            ->notEmptyString('link_view');
        
        return $validator;
    }
}
