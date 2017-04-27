<?php
	$title = h($user['User']['first_name'] .' ' .$user['User']['last_name']);
	$buttons = array(
			$this->Html->link(__("Edit"), array('action' => 'edit', $user['User']['id']), array("class" => "slds-button slds-button--neutral", "id" => "btnEdit",)),
			$this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id'] ),
				array("class" => "slds-button slds-button--neutral", "id" => "btnDelete", 'confirm' => __('Are you sure you want to delete user %s?', $user['User']['first_name'] .' '. $user['User']['last_name'])))
		);
?>

<div class="users view">
	<?php echo $this->element('page_header', array("title" => $title, 'buttons' => $buttons, 'escape' => false)); ?>

	<div class="main-screen">
		<div class="row">
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Description" class="slds-form-element__label">Username</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static"><?php echo h($user['User']['username']); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Degree" class="slds-form-element__label">Role</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static">
							<?php echo h($user['Role']['name']); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Description" class="slds-form-element__label">Created</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static"><?php echo date('m/d/Y', strtotime($user['User']['created'])); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Degree" class="slds-form-element__label">Modified</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static">
							<span class="slds-form-element__static"><?php echo date('m/d/Y', strtotime($user['User']['modified'])); ?></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Description" class="slds-form-element__label">Address</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static"><?php echo __($user['User']['address']); ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="slds-form-element slds-has-divider--bottom">
					<span for="Degree" class="slds-form-element__label">GPA</span>
					<div class="slds-form-element__control read-only-view">
						<span class="slds-form-element__static">
							<?php echo h($user['User']['gpa']); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
	</ul>
</div>

<div class="related form">
	<h3><?php echo __('Related Fellowships'); ?></h3>
	<?php if (!empty($user['Fellowship'])): ?>
	<table cellpadding = "0" cellspacing = "0">

	<?php
	$headerCols = array(
		h('title'),
		h('description'),
		h('degree'),
		h('discipline'),
		h('eligibility')
	);

	foreach($user["Fellowship"] as $fellowship) {
		$rows[] = array(
			h($fellowship['title']),
			h($fellowship['description']),
			h($degrees[$fellowship['degree_id']]),
			h($disciplines[$fellowship['discipline_id']]),
			h($eligibilities[$fellowship['elegibility_id']]),
			array(
				$this->Html->link("", array('controller' => 'fellowships', 'action' => 'view', $fellowship['id']), array("class"=>"fa fa-eye", "title" => "View")),
				$this->Form->postLink("",array('controller' => 'usersfellowships', 'action' => 'delete', $fellowship['UsersFellowship']["id"]),
					array("class"=>"fa fa-trash-o", "title" => "Delete",
					'confirm' => __('Are you sure you want to delete fellowship %s?', $fellowship['title'])))
				),
		);
	}
?>
	<?php echo $this->element('table', array('headerCols' => $headerCols, "rows" => $rows, 'tableId' => 'myDataTable','escape' => false)); ?>

<?php endif; ?>


</div>
