<?php

/**
 * Class LessonsTest
 */
class LessonsTest extends ApiTester {

    /** @test */
    public function it_fetches_lessons()
    {
        // arrange
//        $this->makeLesson();

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

    private function assertObjectHasAttributes()
    {
        $args = func_get_args();
        $object = array_shift($args);

        foreach($args as $attribute)
        {
            $this->assertObjectHasAttribute($attribute, $object);
        }
    }

    /**
     * @param array $lessonFields
     */
//    private function makeLesson($lessonFields = [])
//    {
//        $lesson = array_merge([
//            'title' => $this->fake->sentence,
//            'body'  => $this->fake->paragraph,
//            'some_bool' => $this->fake->boolean
//        ], $lessonFields);
//
//        while($this->times--) Lesson::create($lesson);
//    }

}
