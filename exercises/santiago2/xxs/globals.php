<?php
//only works when not using php routes, because this already has it (alrealdy declared).
function out($data){
    echo htmlspecialchars($data);
}