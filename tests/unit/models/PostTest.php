<?php
namespace tests\models;

use app\models\Posts;
use Codeception\Test\Unit;

class PostTest extends Unit{

    public function testRetrieveQuantityPostsCategory(){
        $post = Posts::retrieveQuantityPostsCategory("Books");
        expect_that($post == '2');
        $post = Posts::retrieveQuantityPostsCategory("Android");
        expect_not($post == '4');
    }

}
