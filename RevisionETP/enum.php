<?php

enum  Days{

    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;  
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
};

echo Days::MONDAY->name . "<br>";
echo Days::TUESDAY ->name . "<br>";
echo Days::WEDNESDAY->name . "<br>";
echo Days::THURSDAY->name . "<br>";

?>