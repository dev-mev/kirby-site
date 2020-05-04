<?php

return [
  'routes' => [
    [
      'pattern' => 'logout',
      'action'  => function() {

        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');

      }
    ]
  ],
  'panel' =>[
    'install' => true
  ],
  'email' => [
    'transport' => [
      'type' => 'smtp',
      'host' => 'smtp.company.com',
      'port' => 465,
      'security' => true
    ]
    ]
];