<?php

beforeEach(function () {});

test('basic command functionality', function () {
    $this->artisan('help')->expectsOutput('Description:')->expectsOutput('Arguments:')->assertExitCode(0);
});
