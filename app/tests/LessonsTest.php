<?php

class LessonsTest extends TestCase {

    /** @test */
    public function it_fetches_lessons()
    {
        // arrange
        $this->makeLesson();

        // act
        $this->getJson('api/v1/lessons');

        // assert
        $this->assertResponseOk();
    }
}
