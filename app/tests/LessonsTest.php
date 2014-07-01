<?php

/**
 * Class LessonsTest
 */
class LessonsTest extends ApiTester {

    /** @test */
    public function it_fetches_lessons()
    {
        // arrange
        //TODO

        // act
        $this->getJson('api/v1/lessons');

        // assert
        $this->assertResponseOk();
    }

    /** @test */
    public function it_fetches_a_single_lesson()
    {
        $lesson = $this->getJson('api/v1/lessons/1')->data;

        $this->assertResponseOk();
        $this->assertObjectHasAttributes($lesson, 'body', 'title', 'active');
    }

    /** @test */
    public function it_404s_if_a_lesson_is_not_found()
    {
        $this->getJson('api/v1/lessons/x');

        $this->assertResponseStatus(404);
    }

}
