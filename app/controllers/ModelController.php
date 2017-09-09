<?php
/**
 * Created by PhpStorm.
 * User: wonbin
 * Date: 2017/8/20
 * Time: 0:03
 */


class ModelController extends ControllerBase
{

    public function testAction() {

//        $expr = ArtExpr::findFirst([ 'id' => "21ca00a84f753c56b07029ec67be27c2"]);

//        echo $expr->name;
//        echo $expr->telnum;

        $exprs = ArtExpr::count();

        echo "There are  count === " . $exprs . "<br>";

        $rawCount = ArtExpr::count(
            [
                "group"  => "region"
            ]
        );
        foreach ($rawCount as $row) {
            echo "There are ", $row->rowcount, " in ", $row->region;
        }

//        echo "There are  different area === " . $rawCount . "<br>";

        $regions = ArtExpr::find([
            "region ='3'"
        ]);

        echo "There are region " . count($regions) ."<br>";
//        var_dump($regions);


        $regions = ArtExpr::find(
            [
                "region = '3'",  // 不是绑定参数的写法
                "limit" => "3"
            ]
        );

        foreach ($regions as $region) {
            echo $region->name, "</br>";
        }

        $expr = ArtExpr::findFirst();

        echo  $expr->name . "<br>";

        $first = ArtExpr::findFirst("id = 'x1hoy627r3rsqkg8zbxi5t0rlry14msw'");

//        var_dump($first);

//        $area = "360平米";
//        $expr = ArtExpr::findByArea($area);
//
//        foreach ($expr as $item) {
//            echo "new" .$item->name . "<br>";
//        }

        $name = "临沂圣福源液态体验店";

        $expra = ArtExpr::findByName($name);

        foreach ($expra as $item) {
            echo "new new" .$item->name . "<br>";
        }

    }


    public function findAction() {

        $exprs  =  ArtExpr::find();

        foreach ($exprs as $item) {
            echo $item->name . "<br>";
        }

        $exprs->rewind();

    echo "<hr>";
       while ($exprs->valid()) {
           $expr = $exprs->current();

           echo $expr->address . "<br>";

           $exprs->next();
       }

    }


    public function saveAction() {
        $expr = new ArtExpr();

        $expr->id = uniqid();
        $expr->name = "王永铭 他妈";
        $expr->address = " 谁他妈知道在哪。。。。";
        $expr->area = "2m";
        $expr->telnum= "123456";
        $expr->workhours="9:00-19:00(节假日20:00)";
        $expr->service_proverbs="草泥马";
        $expr->provincial_id = "10";
        $expr->municipal_id = "21";
        $expr->district_id = "33";
        $expr->carrieroperatorId = "1";
        $expr->lat = "12.23";
        $expr->lng = "56.78";
        $expr->region = "4";
        $expr->userid = "238094182309aksjdflkja";
        $expr->img = "/upload/img/store/0/1493374585712.jpg";


        if ($expr->save() === false) {
            echo "Umh, We can't store robots right now: \n";

            $messages = $expr->getMessages();

            foreach ($messages as $message) {
                echo $message, "\n";
            }
        } else {
            echo "Great, a new robot was saved successfully!";
        }

    }


    public function testUpdateAction() {

            $expr =  ArtExpr::findFirst(
                [
                    "id = :id:",
                    "bind" => [
                        "id" => "599d4cf341540"
                    ]
                ]
            );

//            var_dump($expr);

        $expr->name = "汪永明 他血妈妈";


        if ($expr->save()  === false) {
            echo "Umh, We can't store robots right now: \n";

            $messages = $expr->getMessages();

            foreach ($messages as $message) {
                echo $message, "\n";
            }
        } else {
            echo "Great, a new robot was saved successfully!";
        }
    }

}