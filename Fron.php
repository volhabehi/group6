<?php

abstract class Front
{
    public function __construct()
    {
        echo '<h1>' . __CLASS__ . '</h1>';
    }
}