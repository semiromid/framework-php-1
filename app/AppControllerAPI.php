<?php
declare (strict_types = 1);

namespace approot;

use approot\App;
use approot\AppDB;

/**
 *
 *
 */
class AppControllerAPI
{

    /**
     *
     *
     */
    public function __construct(array $data)
    {
        $this->beforeInit($data);
        $this->init($data);
        $this->afterInit($data);
    }


    /**
     *
     *
     */
    protected function beforeInit(array $data): void
    {

    }


    /**
     *
     *
     */
    private function init(array $data): void
    {
        // clear the old headers
        header_remove();
    }


    /**
     *
     *
     */
    protected function afterInit(array $data): void
    {

    }


    /**
     * Response of data in JSON format
     *
     * @param array $data JSON data
     * @example $this->responseJSON(["status" => "1"])
     */
    final protected function responseJSON(array $data): void
    {
        header('Content-Type: application/json; charset=utf-8');

        // Connections db close
        AppDB::closeConnections();

        echo json_encode($data);
        die();
    }


    /**
     * String output
     *
     * @param string $str
     * @example $this->responseText("test")
     */
    final protected function responseText(string $str): void
    {
        header('Content-Type: text/plain; charset=utf-8');

        // Connections db close
        AppDB::closeConnections();

        echo $str;
        die();
    }


    /**
     * Output text in format of HTML
     *
     * @param string $str
     * @example $this->responseHTML("test")
     */
    final protected function responseHTML(string $str): void
    {
        header('Content-type: text/html; charset=utf-8');

        // Connections db close
        AppDB::closeConnections();

        echo $str;
        die();
    }


    /**
     *
     *
     */
    private function notFound(): void
    {
        http_response_code(404);
        die();
    }

}
