<?php

 

function formatPrices($price) {
    return number_format($price, 0, "", " ").' '.config('app.currency');
}
 
 