<?php 
 function view(string $path, array $data = []): void
 {
    // print_r($data);
    extract($data);
     require_once VIEWS.$path;
 }