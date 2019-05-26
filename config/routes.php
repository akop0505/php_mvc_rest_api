<?php

return [
    "post:signup"=>[
        "controller"=>"RegistrationController",
        "action"=>"signup"
    ],
    "post:login"=>[
        "controller"=>"RegistrationController",
        "action"=>"login"
    ],
    "get:me"=>[
        "controller"=>"RegistrationController",
        "action"=>"me"
    ]
];