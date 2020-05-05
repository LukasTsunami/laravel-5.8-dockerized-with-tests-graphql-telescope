<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

describe("Homepage", function() {
    it("loads successfully", function() {
        $response = $this->laravel->get('/');
        expect($response->getStatusCode())->toEqual(200);
    });
});

describe("Outro", function() {
    describe("describe aninhado", function() {
        it("loads successfully", function() {
            $response = $this->laravel->get('/not-found');
            expect($response->getStatusCode())->toEqual(404);
        });
    });
});
