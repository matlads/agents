<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visit[]|\Cake\Collection\CollectionInterface $visits
 */
?>
<div class="visits index content">
    <?= $this->Html->link(__('Add Checkin'), ['action' => 'checkin'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visits') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('checkin_time') ?></th>
                    <th><?= $this->Paginator->sort('checkout_time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visits as $visit): ?>
                <tr>
                    <td><?= $visit->has('user') ? $this->Html->link($visit->user->email, ['controller' => 'User', 'action' => 'view', $visit->user->id]) : 'NONE' ?></td>
                    <td><?= $visit->has('company') ? $this->Html->link($visit->company->name, ['controller' => 'Companies', 'action' => 'view', $visit->company->id]) : '' ?></td>
                    <td><?= h($visit->checkin_time) ?></td>
                    <td><?= h($visit->checkout_time) ?></td>
		    <td class="actions">
			<?= $this->Form->create(null, [ 'type' => 'post', 'url' => [ 'action' => 'checkout', $visit->id ] ]); ?>
				<?= $visit->checkout_time ? '' : $this->Form->button('Checkout', [ 'type' => 'submit'])  ?>
			<?= $this->Form->end(); ?>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
