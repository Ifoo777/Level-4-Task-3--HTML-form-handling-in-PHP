<style>
    .err {
        color: red;
        font-weight: bold;
    }
</style>

<?php

// Parse POST data about a person's job

function error($msg){
    echo '<p class="err">'.$msg.'</p>';
}

$name = $_POST['full_name'];
if (!$name) // (!$var) checks if $var is defined. In the next task we'll look at better ways of doing this.
    error("Full name not specified!");
else
    echo '<h1>Job details for: '. $name . '</h1>';

$workplace = $_POST['work_place'];
if (!$workplace)
    error("Workplace not specified!");
else
    echo '<p><strong>Workplace</strong>: ' . $workplace . '</p>';

$city = $_POST['city'];
if (!$city)
    error("City not specified!");
else
    echo '<p><strong>City</strong>: ' . $city . '</p>';

$wage = $_POST['hourly_wage'];
if (!$wage)
    error("Wage not specified!");
else
    echo '<p><strong>Wage</strong>: ' . $wage . '</p>';

$start = $_POST['job_start_date'];
if (!$start)
    error("Start date not specified!");
else
    echo '<p><strong>Start date</strong>: ' . $start . '</p>';

?>