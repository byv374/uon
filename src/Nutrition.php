<?php namespace UON;

/**
 * Class Nutrition
 * @package UON
 */
class Nutrition extends Client
{
    public function __construct($token)
    {
        parent::__construct();
        $this->token = $token;
    }

    /**
     * Get all types of nutrition
     * @link https://api.u-on.ru/{key}/nutrition.{_format}
     * @return array|false
     */
    public function all()
    {
        $endpoint = '/nutrition';
        return $this->doRequest('get', $endpoint);
    }

    /**
     * Create new nutrition
     * @link https://api.u-on.ru/{key}/city/create.{_format}
     * @param array $parameters - List of parameters
     * @return array|false
     */
    public function create($parameters)
    {
        $endpoint = '/nutrition/create';
        return $this->doRequest('post', $endpoint, $parameters);
    }

    /**
     * @link https://api.u-on.ru/{key}/nutrition/update/{id}.{_format}
     * @param string $id - Unique nutrition ID
     * @return array|false
     */
    public function update($id)
    {
        $endpoint = '/nutrition/update/' . $id;
        return $this->doRequest('post', $endpoint);
    }

}
