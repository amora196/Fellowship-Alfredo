<?php 
	$title = h($user['User']['first_name'] .' '. $user['User']['last_name']);
	$buttons = array(
			$this->Form->button('Save', array("class" => "slds-button slds-button--neutral", "id" => "btnSave", "onclick" => "submitForm()")),
			$this->Html->link(__("Cancel"), array('action' => 'view', $user['User']['id']), array("class" => "slds-button slds-button--neutral", "id" => "btnCancel"))
		);
?>

<div class="users form">
	
	<legend><?php echo __('My Profile'); ?></legend>
	<?php echo $this->element('page_header', array("title" => $title, 'buttons' => $buttons, 'escape' => false)); ?>

	<?php echo $this->Form->create('User', array("class" => "form-horizontal", "role" => "form")); ?>

	<?php echo $this->Form->input('id'); ?>

	<div class="row">
		<div class="col-md-4">
				<?php echo $this->Form->input('first_name', array("class" => "slds-input", 
					"div" => array("class" => "slds-form-element__control"),"label" => array("class" => "slds-form-element__label"))); ?>
		</div>
		<div class="col-md-4">
			<?php echo $this->Form->input('last_name', array("class" => "slds-input", 
					"div" => array("class" => "slds-form-element__control"),"label" => array("class" => "slds-form-element__label"))); ?>
		</div>
		<div class="col-md-4">
			<?php echo $this->Form->input('gpa', array("class" => "slds-input", "type"=>"number", "step"=>"0.01", "min"=>"2.0", "max"=>"4.0",
				"div" => array("class" => "slds-form-element__control"), "label" => array("class" => "slds-form-element__label", "text"=> "GPA"))); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
				<?php echo $this->Form->input('username', array("class" => "slds-input", 
					"div" => array("class" => "slds-form-element__control"),"label" => array("class" => "slds-form-element__label"))); ?>
		</div>
		<div class="col-md-6">
			<?php echo $this->Form->input('password', array("class" => "slds-input", 
					"div" => array("class" => "slds-form-element__control"),"label" => array("class" => "slds-form-element__label"))); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
				<?php echo $this->Form->input('address', array("class" => "slds-textarea", "rows" => 5,
					"div" => array("class" => "slds-form-element__control"),"label" => array("class" => "slds-form-element__label"))); ?>
		</div>
	</div>
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

	// $isUserAllowed = !!AuthComponent::user('role_id') != "3";
?>
	<?php echo $this->element('table', array('headerCols' => $headerCols, "rows" => $rows, 'tableId' => 'myDataTable','escape' => false, 'isUserAllowed' => AuthComponent::user('role_id') != "3")); ?>

<?php endif; ?>


<script>
	function submitForm(){
		$('form#UserProfileForm').submit();
	}
</script>
