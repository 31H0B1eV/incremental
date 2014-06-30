<?php

/**
 * Class ApiController
 */
class ApiController extends BaseController {
    const HTTP_RESPONSE_CREATED = 201;
    const HTTP_INTERNAL_ERROR = 500;
    const HTTP_NOT_FOUND = 404;
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @param mixed $statusCode
     * @return current object
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $message - error message string
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondNotFound($message = 'Not found!')
    {
        return $this->setStatusCode(self::HTTP_NOT_FOUND)
                    ->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Error!')
    {
        return $this->setStatusCode(self::HTTP_INTERNAL_ERROR)
                    ->respondWithError($message);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondCreated($message)
    {
        return $this->setStatusCode(self::HTTP_RESPONSE_CREATED)->respond([
            'status'  => 'success',
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function unprocessableEntityError($message)
    {
        return $this->setStatusCode(self::HTTP_UNPROCESSABLE_ENTITY)
                    ->respondWithError($message);
    }

    //TODO implement other response code

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
} 