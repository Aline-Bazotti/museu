<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Busca[]|\Cake\Collection\CollectionInterface $buscas 
 * @var $termo 
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

?>
<!DOCTYPE html>
<html>
<body>
  <div class="row-center">
    <div class="row">
        <h5>Busque por uma obra, autor ou coleção.</h5>
    </div>
    <form class="row" action="" method="get">
        <input type="text" id="pesquisa" placeholder="Faça uma pesquisa..." required="true" name="termo" value="<?= $termo ?>">
        <button type="submit">Buscar</button>
    </form>

    <div class="row-center" style="margin-top: 20px">
    
    <div class="row">
    <?php if($buscas != null){ ?>
      <h4>Resultados</h4>
    <?php } else {?>
      <h4>Nenhum resultado encontrado.</h4>
    <?php } ?>
    </div>

  <?php foreach ($buscas as $busca): ?> 
    <h3><a href=<?= h($busca->link_view) ?>><?= h($busca->titulo) ?></a><h3>
    <h6><?= h($busca->descricao) ?></h6>
  <?php endforeach; ?>

 
   </div>
  </div>
</body>
</html>
