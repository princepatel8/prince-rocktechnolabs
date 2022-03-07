<?php
namespace Mageants\Hello\Api;

interface TestInterface
{

    /**
     * POST for test api
     * @param string[] $data
     * @return string
     */

  public function setData($data);


  /**
     * GET for test api
     * @return Mageants\Hello\Api\TestInterface[]
     */

  public function getData();

   /**
     * POST for test api
     * @param string[] $id
     * @return Mageants\Hello\Api\TestInterface[]
     */

  public function deleteData($id);

  /**
     * POST for test api
     * @param string[] $id
     * @return Mageants\Hello\Api\TestInterface[]
     */

  public function editData($id);

}