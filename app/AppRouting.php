<?php
namespace approot;

/**
 *
 *
 */
class AppRouting
{

    private $url;
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->url = parse_url("http://myapp.com" . $_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }

    /**
     * For routing all or selectively requests
     *
     * @param string|regexp $url URL routing or regular expression which require set 'true' for $reg_exp
     * @param string $controller Controller class classlink
     * @param string $action URL Controller function
     * @param false|array $request_method [] - all request methods are allowed  or array of allow
     * request methods
     * @param boolean $reg_exp if 'true' will be use regular expression in $url
     * @example $this->req('/upload/post', '\app\controllers\MyController', null)
     * @example $this->req('/upload/post', '\app\controllers\MyController', 'index')
     * @example $this->req('/upload/post', '\app\controllers\MyController', 'index', ['GET'])
     * @example $this->req("/^\/upload\/post.*$/", '\app\controllers\MyController', 'index', ['GET'], true)
     */
    protected function req(
        string $url_router,
        string $controller,
        string $action = null,
        array $req_methods = [],
        bool $reg_exp = false
    ): void {

        if (!empty($req_methods)) {
            if (in_array($this->app::$request->getMethod(), $req_methods) === false) {
                return;
            }
        }

        if (!$reg_exp) {
            // Srting URL
            if ($this->url !== $url_router) {
                return;
            }
        } else {
            // RegExp URL
            if (preg_match($url_router, $this->url)) {
                return;
            }
        }

        if ($action !== null) {
            $arr["action"] = $action;
            (new $controller($arr))->$action();
        } else {
            (new $controller());
        }
    }









    /**
     * For group routing
     *
     * @param string|regexp $url URL routing or regular expression which require set 'true' for $regex
     * @param false|array $request_method 'false' - all request methods are allowed  or array of allow request methods
     * @param boolean $reg_exp if 'true' will be use regular expression in $url
     *
     * @return boolean false is not match URL or not match request method
     *
     * @example $this->group("/upload") // all request methods are allowed
     * @example $this->group("/upload", ["POST","PUT","GET"])
     * @example $this->group("/^\/upload\/post.+$/", ["POST","PUT","GET"], true)
     */
    protected function group($url, $request_method = false, $reg_exp = false)
    {

        if ($request_method !== false) {
            if (in_array($this->app::$request->getMethod(), $request_method) === false) {
                return false;
            }
        }

        if (!$reg_exp) {
            if (preg_match('/^' . preg_quote($url, '/') . '.*$/',
                $this->url)) {
                return true;
            }
        } else {
            if (preg_match($url, $this->url)) {
                return true;
            }
        }

        return false;
    }

}
