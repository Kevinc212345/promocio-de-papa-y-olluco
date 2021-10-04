<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'Compra realizada',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'javiercanchanya82@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'papa' => array(
    'order' => 3,
    'type' => 'checkbox',
    'label' => 'papa',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'papa\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'checkbox',
    'label' => 'olluco',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'olluco\' is required.'
    )
    ),
    'textarea' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'textarea',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'textarea\' is required.'
    )
    ),
    'address' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'address\' is required.'
    )
    ),
    'distrito' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'distrito',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'distrito\' is required.'
    )
    ),
    'message' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>