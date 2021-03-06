<?php
/**
 * Kunena Component
 * @package Kunena.Template.Crypsis
 * @subpackage Topic
 *
 * @copyright (C) 2008 - 2014 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

?>

<div class="btn-toolbar ">
	<div class="kmessage-buttons-row">
		<?php if ($this->topicButtons->get('reply') || $this->topicButtons->get('subscribe') || $this->topicButtons->get('favorite') ) : ?>
			<div class="btn-group">
				<button class="btn dropdown-toggle dropdown-border" data-toggle="dropdown">Action</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><?php echo $this->topicButtons->get('reply') ?></li>
					<li><?php echo $this->topicButtons->get('subscribe') ?></li>
					<li><?php echo $this->topicButtons->get('favorite') ?></li>
				</ul>
			</div>
			<!-- /btn-group -->
		<?php endif ?>
		<?php if ($this->topicButtons->get('delete') || $this->topicButtons->get('moderate') || $this->topicButtons->get('sticky') || $this->topicButtons->get('lock')) : ?>
			<div class="btn-group">
				<button class="btn btn-primary dropdown-toggle dropdown-border" data-toggle="dropdown">Moderation</button>
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><?php echo $this->topicButtons->get('delete') ?></li>
					<li><?php echo $this->topicButtons->get('moderate') ?></li>
					<li><?php echo $this->topicButtons->get('sticky') ?></li>
					<li><?php echo $this->topicButtons->get('lock') ?></li>
				</ul>
			</div>
			<!-- /btn-group -->
		<?php endif ?>
		<?php if ($this->topicButtons->get('flat') || $this->topicButtons->get('threaded') || $this->topicButtons->get('indented')) : ?>
			<div class="btn-group">
				<button class="btn dropdown-toggle dropdown-border" data-toggle="dropdown">View</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><?php echo $this->topicButtons->get('flat') ?></li>
					<li> <?php echo $this->topicButtons->get('threaded') ?></li>
					<li><?php echo $this->topicButtons->get('indented') ?></li>
				</ul>
			</div>
			<!-- /btn-group -->
			<?php endif ?>
	</div>
</div>
<div class="clearfix"></div>
