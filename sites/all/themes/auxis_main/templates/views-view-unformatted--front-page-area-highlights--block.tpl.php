<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */

$feature_id = 0;
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
    <?php $feature_id++; ?>
    <div class="feature feature-<?php echo($feature_id) ?>">
        <?php print $row; ?>
    </div>
<?php endforeach; ?>