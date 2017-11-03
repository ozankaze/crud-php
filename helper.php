<?php

    //untuk filter data agar
    ///tag php js hpml gak masuk
    function filterData($value) {
        return htmlspecialchars(strip_tags($value));
    }

?>