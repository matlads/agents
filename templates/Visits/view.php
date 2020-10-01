<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visit $visit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Visit'), ['action' => 'edit', $visit->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visit'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visits view content">
            <h3><?= h($visit->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $visit->has('company') ? $this->Html->link($visit->company->name, ['controller' => 'Companies', 'action' => 'view', $visit->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $visit->has('user') ? $this->Html->link($visit->user->id, ['controller' => 'Users', 'action' => 'view', $visit->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($visit->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Checkin Time') ?></th>
                    <td><?= h($visit->checkin_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Checkout Time') ?></th>
                    <td><?= h($visit->checkout_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($visit->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($visit->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
