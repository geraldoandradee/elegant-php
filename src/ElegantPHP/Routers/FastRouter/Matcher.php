<?php
//
//namespace ElegantPHP\Routers\FastRouter;
//
//
//use ElegantPHP\Exceptions\Router\RouteException;
//use ElegantPHP\Factory\BaseFactory;
//
//class Matcher extends BaseFactory
//{
//    private $requestUri;
//    private $pattern;
//
//    /**
//     * @return bool
//     */
//    public function match()
//    {
//        try {
//            $dataParsed = $this->parse();
//            if  (count($dataParsed) > 0) {
//
//            } else {
//                throw new RouteException('');
//            }
//        } catch (\Exception $e) {
//            return false;
//        }
//        return true;
//    }
//
//    /**
//     * @return string
//     */
//    public function getRequestUri()
//    {
//        return $this->requestUri;
//    }
//
//    /**
//     * @param string $requestUri
//     * @return Matcher
//     */
//    public function setRequestUri($requestUri)
//    {
//        $this->requestUri = $requestUri;
//
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPattern()
//    {
//        return $this->pattern;
//    }
//
//    /**
//     * @param mixed $pattern
//     */
//    public function setPattern($pattern)
//    {
//        $this->pattern = $pattern;
//    }
//
//    private function parse() {
//        preg_match($this->getPattern(), $this->getRequestUri(), $matches);
//        return $matches;
//    }
//}
