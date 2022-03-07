<?php
namespace Mageants\Hello\Model;
use Mageants\Hello\Api\TestInterface;
use Mageants\Hello\Model\PostFactory;
use Mageants\Hello\Model\ResourceModel\Post\CollectionFactory;

class Test implements TestInterface
{
     private $PostFactory;
     private $CollectionFactory;
     public function __construct(PostFactory $PostFactory,CollectionFactory $CollectionFactory)
    {
        $this->PostFactory = $PostFactory;
        $this->CollectionFactory = $CollectionFactory;
    }

     /**
     * {@inheritdoc}
     */
    public function setData($data)
    {   
        echo "string";
        $name =$data['name'];
        $number =$data['number'];
        $city =$data['city'];

        $insertData = $this->PostFactory->create();
        $insertData->setName($name)->save();
        $insertData->setNumber($number)->save();
        $insertData->setCity($city)->save();

        //Customize the code as per your requirement.

        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        // $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        // $connection = $resource->getConnection();
        // $tableName = $resource->getTableName('test_table');

        // $sql = "Insert Into " . $tableName . " (name, number, city) Values ('$name','$number','$city')";     
        // $connection->query($sql);       
        return 'successfully saved';
    }

    /**
     * Returns greeting message to user
     *
     * @api
     * @return \Mageants\Hello\Api\TestInterface[]
     */
    public function getData()
    {
        $data = $this->PostFactory->create();
        $collect=$data->getCollection()->getData();
        return $collect;
    }

    public function deleteData($id)
    {
        $data = $this->PostFactory->create()->load($id);    
        $collect=$data->delete();
        return "Data Deleted";
    }

    public function editData($id)
    {
        $updateData = $this->PostFactory->create()->load($id);
        $updateData->setName("het")->save();
        $updateData->setNumber("5")->save();
        $updateData->setCity("anand")->save();
        return "updated";
    }
}
