<?php

return [
    "" => [
        "controller" => "main",
        "action" => "index",
    ],
    "about" => [
        "controller" => "main",
        "action" => "about"
    ],
    "contact" => [
        "controller" => "main",
        "action" => "contact"
    ],
    "products/([0-9]+)" => [
        "controller" => "products",
        "action" => "view",
        "id" => "$1"
    ],
    "products/list" => [
        "controller" => "products",
        "action" => "list"
    ],
    "products/order/([0-9]+)" => [
        "controller" => "products",
        "action" => "order",
        "id" => "$1"
    ],
    "account/addCart/([0-9]+)" => [
        "controller" => "account",
        "action" => "add",
        "id" => "$1"
    ],
    "account/deleteCart/([0-9]+)" => [
        "controller" => "account",
        "action" => "delete",
        "id" => "$1"
    ],
    "account/view" => [
        "controller" => "account",
        "action" => "view"
    ],
    "account/login" => [
        "controller" => "account",
        "action" => "login"
    ],
    "account/register" => [
        "controller" => "account",
        "action" => "register"
    ],
    "account/logout" => [
        "controller" => "account",
        "action" => "logout"
    ],
    "account/cart" => [
        "controller" => "account",
        "action" => "cart"
    ],
    "admin/delete/([0-9]+)" => [
        "controller" => "admin",
        "action" => "delete",
        "id" => "$1"
    ],
    "admin/edit/([0-9]+)" => [
        "controller" => "admin",
        "action" => "edit",
        "id" => "$1"
    ],
    "admin/([0-9]+)" => [
        "controller" => "admin",
        "action" => "view",
        "id" => "$1"
    ],

    "admin/create" => [
        "controller" => "admin",
        "action" => "create"
    ],
    "admin/list" => [
        "controller" => "admin",
        "action" => "list"
    ],
    "admin" => [
        "controller" => "admin",
        "action" => "index"
    ],

];

