<?php

$input = $this->el('input', [
    'type' => $props['hidden'] ? 'hidden' : 'text',
    'name' => "current_date",
    'value' => $props['current_date'] ?? '',
    'class' => ($props['hidden'])? 'uk-hidden': 'uk-padding uk-text-center',
    'disabled' => 'disabled'
]);

?>

<?= $input(); ?>
