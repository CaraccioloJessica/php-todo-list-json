<?php

$todoList = [
  [
    "text" => "HTML",
    "completed" => true
  ],
  [
    "text" => "CSS",
    "completed" => true
  ],
  [
    "text" => "Responsive design",
    "completed" => true
  ],
  [
    "text" => "Javascript",
    "completed" => true
  ],
  [
    "text" => "PHP",
    "completed" => false
  ],
  [
    "text" => "Laravel",
    "completed" => false
  ]
];

$jsonTodoList = json_encode($todoList);
file_put_contents('todo.json', $jsonTodoList);

$jsonTodoList = file_get_contents("todo.json", true);
$todoList = json_decode($jsonTodoList);

$jsonTodoList = json_encode($todoList);
file_put_contents('todo.json', $jsonTodoList);

$jsonTodoList = file_get_contents("todo.json", true);
$todoList = json_decode($jsonTodoList);

var_dump($todoList);