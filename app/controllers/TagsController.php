<?php

use Acme\Transformers\TagsTransformer;

/**
 * Class TagsController
 */
class TagsController extends ApiController {

    /**
     * @var
     */
    protected $tagTransformer;

    /**
     * @param $tagTransformer
     */
    function __construct(TagsTransformer $tagTransformer)
    {
        $this->tagTransformer = $tagTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $lessonId
     * @return Response
     */
	public function index($lessonId = null)
	{
        $tags = $this->getTags($lessonId);

        return $this->respond([
            'data' => $this->tagTransformer->transformCollection($tags->all())
        ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     * @param $lessonId
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     */
    public function getTags($lessonId)
    {
        return $lessonId ? Lesson::findOrFail($lessonId)->tags : Tag::all();
    }


}
