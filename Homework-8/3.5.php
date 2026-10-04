<?php
$text = 'Yesterday I received a bill for $15, but our team budget only allocated $10. We had to charge the rest to $account_cash. If we add shipping for $5, the total will be $20. Please send a message to $contact_email to claim our $50 discount on orders over $100.';
$reg = '/\$(\w+)/';
// $replacement = '<b></b>'
// preg_match_all($reg, $text, $arr);
// print_r($arr);

echo preg_replace($reg, '<b>\1</b>', $text);

// echo $text;